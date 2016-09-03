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
        // @TODO find and return all events
    }

}
