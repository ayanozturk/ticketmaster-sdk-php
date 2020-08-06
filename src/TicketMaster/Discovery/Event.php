<?php

namespace TicketMaster\Discovery;

use TicketMaster\Api;
use TicketMaster\Entity;
use TicketMaster\Serializer\Serializer;

/**
 * Class Event
 */
class Event extends Api\AbstractApi
{

    /**
     * @return Entity\Event[]
     */
    public function findAll(): array
    {
        $response = $this->getClient()
            ->get('discovery/v2/events?apikey=' . self::getKey() . '&size=2');

        $eventsJson = $response->getBody()->getContents();
        $eventsResponseArray = json_decode($eventsJson, true);

        $eventsData = json_encode($eventsResponseArray['_embedded']['events']);

        $serializer = new Serializer();

        return $serializer->deserialize($eventsData, 'array<TicketMaster\Entity\Event>');
    }
}
