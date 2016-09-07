<?php
namespace TicketMaster\Discovery;

use TicketMaster\Api;
use TicketMaster\Entity;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class Event
 * @package TicketMaster\Discovery
 */
class Event extends Api\AbstractApi
{

    /**
     * @return Entity\Event[]
     */
    public function findAll(): array
    {
        $response = $this->getClient()
            ->get('discovery/v2/events?apikey='. $this->getKey().'&size=2');

        $eventsJson = $response->getBody()->getContents();
        $eventsResponseArray = json_decode($eventsJson, true);

        $eventsArray = $eventsResponseArray['_embedded']['events'];

        $events = [];
        $normalizer = new ObjectNormalizer(null);
        $serializer = new Serializer([$normalizer]);

        foreach ($eventsArray as $eventArray) {
            $events[] = $serializer->denormalize($eventArray, Entity\Event::class);
        }

        return $events;
    }

}
