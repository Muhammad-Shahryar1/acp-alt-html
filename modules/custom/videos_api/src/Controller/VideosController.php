<?php

namespace Drupal\videos_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

/**
 * Controller for Videos API.
 */
class VideosController extends ControllerBase {

  /**
   * Returns a JSON list of videos (with translations).
   */
  public function getVideos() {
    $videos = [];

    // Get current language ID (e.g. "en" or "ar")
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

    // Query all published "videos" nodes.
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'videos')
      ->accessCheck(FALSE)
      ->execute();

    if (!empty($nids)) {
      $nodes = Node::loadMultiple($nids);

      foreach ($nodes as $node) {
        // ✅ Load the node in the current language if translation exists
        if ($node->hasTranslation($langcode)) {
          $node = $node->getTranslation($langcode);
        }

        $title = $node->label();
        $video_link = '';

        // ✅ Safely get video field (handle URI/URL/value)
        if ($node->hasField('field_video_link') && !$node->get('field_video_link')->isEmpty()) {
          $value = $node->get('field_video_link')->getValue();
          $first = is_array($value) ? reset($value) : $value;

          if (is_array($first)) {
            if (!empty($first['uri'])) {
              $video_link = $first['uri'];
            }
            elseif (!empty($first['url'])) {
              $video_link = $first['url'];
            }
            elseif (!empty($first['value'])) {
              $video_link = $first['value'];
            }
          }
          else {
            $video_link = (string) $first;
          }
        }

        $videos[] = [
          'title' => $title,
          'video_link' => $video_link,
          'langcode' => $langcode, // optional: include for debugging
        ];
      }
    }

    return new JsonResponse($videos);
  }

}
