<?php
namespace TicketMaster\Entity;

/**
 * Class City
 * @package TicketMaster\Entity
 */
class City
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return City
     */
    public function setName(string $name): City
    {
        $this->name = $name;
        return $this;
    }

}
