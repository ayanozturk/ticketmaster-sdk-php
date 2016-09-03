<?php
namespace TicketMaster\Example;

use TicketMaster\Discovery\Event as TMEvent;

class DiscoveryEvent
{
    public function events()
    {
        $tmEvents = new TMEvent();
        $tmEvents->setKey('YOUR-API-KEY');

        $events = $tmEvents->findAll();

        // Do something with fetched events
    }
}
