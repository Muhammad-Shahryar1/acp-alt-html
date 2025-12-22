<?php

namespace Drupal\acp_news\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\Core\File\FileSystemInterface;

/**
 * JSON CRUD controller using nodes of type 'news'.
 */
class NewsApiController extends ControllerBase
{

  /**
   * GET /acp-news/api/news
   */
  public function listNews()
  {
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'news')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->accessCheck(FALSE)
      ->execute();

    $nodes = Node::loadMultiple($nids);
    $items = [];

    foreach ($nodes as $node) {
      // If translation exists, use that version
      if ($node->hasTranslation($langcode)) {
        $node = $node->getTranslation($langcode);
      }

      $items[] = $this->nodeToArray($node);
    }

    return new JsonResponse(array_values($items));
  }


  /**
   * Convert node to array for JSON output.
   */
  protected function nodeToArray(Node $node)
{
  $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

  $item = [
    'id' => $node->id(),
    'title' => $node->getTitle(),
    'description' => $node->get('field_description')->value
      ? html_entity_decode(strip_tags($node->get('field_description')->value))
      : '',
    'location' => $node->get('field_location')->value ?? '',
    'date' => $node->get('field_date')->value ?? '',
  ];

  // Handle categories (taxonomy terms) with translation
  $categories = [];
  if ($node->hasField('field_category') && !$node->get('field_category')->isEmpty()) {
    foreach ($node->get('field_category')->referencedEntities() as $term) {
      if ($term->hasTranslation($langcode)) {
        $term = $term->getTranslation($langcode);
      }
      $categories[] = $term->getName();
    }
  }
  $item['categories'] = $categories;

  // Handle news image
  if ($node->hasField('field_newsimage') && !$node->get('field_newsimage')->isEmpty()) {
    $file = $node->get('field_newsimage')->entity;
    if ($file) {
      $item['image_url'] = \Drupal::service('file_url_generator')->generateAbsoluteString($file->getFileUri());
      $item['newsimage'] = basename($file->getFileUri());
    }
  }

  return $item;
}


  /**
   * Import an image from the theme assets into public:// and return fid.
   */
  protected function importImageFromTheme($filename, $alt = '')
  {
    $source = DRUPAL_ROOT . '/themes/custom/acp/assets/news/' . $filename;
    if (!file_exists($source)) {
      return NULL;
    }

    $data = file_get_contents($source);
    $directory = 'public://acp_news_images';
    \Drupal::service('file_system')->prepareDirectory($directory, FileSystemInterface::CREATE_DIRECTORY);
    $destination = $directory . '/' . $filename;

    $file = file_save_data($data, $destination, FILE_EXISTS_REPLACE);
    if ($file) {
      $file->setPermanent();
      $file->save();
      return $file->id();
    }
    return NULL;
  }

}
