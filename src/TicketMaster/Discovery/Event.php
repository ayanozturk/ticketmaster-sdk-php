<?php
namespace TicketMaster\Discovery;

use TicketMaster\Api;
use TicketMaster\Entity;

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
            ->get('discovery/v2/events?apikey='.$this->getKey().'&size=2');

        $eventsJson = $response->getBody()->getContents();
        $eventsResponseArray = \GuzzleHttp\json_decode($eventsJson, true);

        $eventsArray = $eventsResponseArray['_embedded']['events'];

        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        $events = [];

        foreach ($eventsArray as $eventArray) {
            $events[] = $serializer->fromArray($eventArray, \TicketMaster\Entity\Event::class);
        }

        return $events;
    }

}
