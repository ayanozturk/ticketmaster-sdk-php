<?php

require 'vendor/autoload.php';

use TicketMaster\Discovery\Event as TMEvent;

$tmEvents = new TMEvent();
$tmEvents->setKey('YOUR-KEY');

$events = $tmEvents->findAll();

foreach ($events as $event) {
    echo $event->getName() . "\n";
}
