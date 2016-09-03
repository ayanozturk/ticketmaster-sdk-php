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
            ->get('discovery/v2/events.json?apikey='.$this->getKey());

        $eventsJson = $response->getBody()->getContents();

        // @TODO deserialise the json to entities here
        return \GuzzleHttp\json_decode($eventsJson, true);
    }

}
