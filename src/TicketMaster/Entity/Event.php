<?php
namespace TicketMaster\Entity;

/**
 * Class Event
 * @package TicketMaster\Entity
 */
class Event
{
    protected $id;
    protected $name;
    protected $description;
    protected $locale;
    protected $url;
    protected $promoter;
    protected $images;
    protected $classifications;
    protected $dates;
    protected $test;
    protected $sales;
    protected $groupId;
    protected $info;
    protected $pleaseNote;

    /**
     * @var Attraction[]
     */
    protected $attractions;

    /**
     * @var Venue[]
     */
    protected $venues;

    
    protected $categories;
}
