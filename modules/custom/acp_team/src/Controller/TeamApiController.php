<?php

declare(strict_types=1);

namespace Drupal\acp_team\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;
use Drupal\Core\File\FileSystemInterface;

/**
 * JSON controller for Executive Management members.
 */
final class TeamApiController extends ControllerBase {

  /**
   * Content type machine name.
   * Matches: /admin/structure/types/manage/executive_management/fields
   */
  private const BUNDLE = 'executive_management';

  /**
   * GET /acp-team/api/teams
   * Returns a JSON array of executive management members.
   */
  public function listTeams(): JsonResponse {
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

    // Query the correct bundle.
    $nids = \Drupal::entityQuery('node')
  ->condition('type', self::BUNDLE)
  ->condition('status', 1)
  ->sort('field_order.value', 'DESC') // DESC = higher number on top; use 'ASC' for 1 at top
  ->sort('created', 'DESC')           // tie-breaker
  ->accessCheck(FALSE)
  ->execute();

    if (empty($nids)) {
      return new JsonResponse([]);
    }

    $nodes = Node::loadMultiple($nids);
    $items = [];

    foreach ($nodes as $node) {
      if ($node->hasTranslation($langcode)) {
        $node = $node->getTranslation($langcode);
      }
      $items[] = $this->nodeToArray($node);
    }

    return new JsonResponse(array_values($items));
  }

  /**
   * Map a node to the API shape.
   * Fields (per your screenshot):
   * - field_team_member_name : Text (plain)
   * - field_team_role        : Text (plain)
   * - field_team_deparment   : Text (plain)  <-- spelling kept as-is
   * - field_team_image       : Image
   */
  private function nodeToArray(Node $node): array {
    $item = [
      'id'         => $node->id(),
      'name'       => $node->get('field_team_member_name')->value ?? '',
      'role'       => $node->get('field_team_role')->value ?? '',
      'department' => $node->get('field_team_deparment')->value ?? '',
    ];

    if ($node->hasField('field_team_image') && !$node->get('field_team_image')->isEmpty()) {
      $file = $node->get('field_team_image')->entity;
      if ($file) {
        $item['image_url'] = \Drupal::service('file_url_generator')
          ->generateAbsoluteString($file->getFileUri());
        $item['image_filename'] = basename($file->getFileUri());
      }
    }

    return $item;
  }

  // Kept for parity with your News controller (optional helper).
  private function importImageFromTheme(string $filename): ?int {
    $source = DRUPAL_ROOT . '/themes/custom/acp/assets/team/' . $filename;
    if (!file_exists($source)) {
      return NULL;
    }
    $data = file_get_contents($source);
    $directory = 'public://acp_team_images';
    \Drupal::service('file_system')->prepareDirectory($directory, FileSystemInterface::CREATE_DIRECTORY);
    $destination = $directory . '/' . $filename;

    $file = file_save_data($data, $destination, FILE_EXISTS_REPLACE);
    if ($file) {
      $file->setPermanent();
      $file->save();
      return (int) $file->id();
    }
    return NULL;
  }
}
