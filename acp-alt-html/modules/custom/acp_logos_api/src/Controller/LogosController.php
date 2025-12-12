<?php

namespace Drupal\acp_logos_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

/**
 * Controller for Logos API.
 */
class LogosController extends ControllerBase {

  /**
   * Returns a JSON list of logos (with translations).
   */
  public function getLogos() {
    $logos = [];

    // Get current language (for multilingual sites)
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

    // Query all published "logos" nodes
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'logos')
      ->accessCheck(FALSE)
      ->execute();

    if (!empty($nids)) {
      $nodes = Node::loadMultiple($nids);

      foreach ($nodes as $node) {
        // Use translation if available
        if ($node->hasTranslation($langcode)) {
          $node = $node->getTranslation($langcode);
        }

        $title = $node->label();
        $image_url = '';

        // Extract image field URL
        if ($node->hasField('field_logo') && !$node->get('field_logo')->isEmpty()) {
          $image = $node->get('field_logo')->entity;
          if ($image) {
            $image_url = \Drupal::service('file_url_generator')
              ->generateAbsoluteString($image->getFileUri());
          }
        }

        // Add to response
        $logos[] = [
          'title' => $title,
          'image_url' => $image_url,
          'langcode' => $langcode,
        ];
      }
    }

    return new JsonResponse($logos);
  }

}
