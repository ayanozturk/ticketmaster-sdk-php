<?php

require 'vendor/autoload.php';

use TicketMaster\Discovery\Event as TMEvent;

$tmEvents = new TMEvent();
$tmEvents->setKey('yuFAaxIk0X3vWQElXiD25h8kyR9Ewi5P');

$events = $tmEvents->findAll();

foreach ($events as $event) {
    echo $event->getId() . "\n";
    echo $event->getName() . "\n";
    echo $event->getUrl() . "\n";
    echo "\n";
}
