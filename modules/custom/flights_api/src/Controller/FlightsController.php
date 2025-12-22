<?php

namespace Drupal\flights_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

class FlightsController extends ControllerBase
{

    public function getFlights()
    {
        $flights = [];

        // Load all published flight nodes
        $nids = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'flights')
            ->accessCheck(FALSE)
            ->execute();

        if (empty($nids)) {
            return new JsonResponse($flights);
        }

        $nodes = Node::loadMultiple($nids);

        foreach ($nodes as $node) {
            $item = [
                'airline' => $node->label(),
                'from' => $node->get('field_from')->value ?? '',
                'to' => $node->get('field_to')->value ?? '',
                'continent' => $node->get('field_continent')->value ?? '',
                'yearStarted' => $node->get('field_yearstarted')->value ?? '',
                'contractedYear' => $node->get('field_contractedyear')->value ?? '',
                'started' => $node->get('field_started')->value ?? '',
            ];

            $flights[] = $item;
        }

        return new JsonResponse($flights);
    }
}
