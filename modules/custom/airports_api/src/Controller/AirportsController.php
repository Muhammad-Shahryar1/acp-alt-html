<?php

namespace Drupal\airports_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;

class AirportsController extends ControllerBase {

  public function getAirports() {
    $airports = [];

    // Get current language ID
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

    // Query all published airport nodes
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'airports')
      ->accessCheck(FALSE)
      ->execute();

    if (empty($nids)) {
      return new JsonResponse($airports);
    }

    $nodes = Node::loadMultiple($nids);

    foreach ($nodes as $node) {
      // ✅ Load node translation if available
      if ($node->hasTranslation($langcode)) {
        $node = $node->getTranslation($langcode);
      }

      $item = [
        'name' => $node->label(),
        'city' => $node->get('field_city')->value ?? '',
        'code' => $node->get('field_code')->value ?? '',
        'image' => '',
        'timezone' => $node->get('field_timezone')->value ?? '',
        'airportType' => $node->get('field_airport_type')->value ?? '',
        'yearsData' => [],
      ];

      // ✅ Handle airport image
      if ($node->hasField('field_airport_image') && !$node->get('field_airport_image')->isEmpty()) {
        $fid = $node->get('field_airport_image')->target_id;
        if ($fid) {
          $file = File::load($fid);
          if ($file) {
            $item['image'] = \Drupal::service('file_url_generator')
              ->generateAbsoluteString($file->getFileUri());
          }
        }
      }

      // ✅ Handle International Airports
      if ($item['airportType'] === 'International' && $node->hasField('field_international_years_data')) {
        foreach ($node->get('field_international_years_data')->referencedEntities() as $para) {
          if ($para->hasTranslation($langcode)) {
            $para = $para->getTranslation($langcode);
          }

          $year = $para->get('field_year')->value ?? '';
          if ($year) {
            $item['yearsData'][$year] = [
              'Domestic Passengers' => $para->get('field_domestic_passengers')->value ?? '',
              'International Passengers' => $para->get('field_international_passengers')->value ?? '',
            ];
          }
        }
      }

      // ✅ Handle Domestic Airports
      if ($item['airportType'] === 'Domestic' && $node->hasField('field_domestic_years_data')) {
        foreach ($node->get('field_domestic_years_data')->referencedEntities() as $para) {
          if ($para->hasTranslation($langcode)) {
            $para = $para->getTranslation($langcode);
          }

          $year = $para->get('field_years')->value ?? '';
          if ($year) {
            $item['yearsData'][$year] = [
              'Flights' => $para->get('field_flights')->value ?? '',
              'Passengers' => $para->get('field_passengers')->value ?? '',
            ];
          }
        }
      }

      $airports[] = $item;
    }

    return new JsonResponse($airports);
  }
}
