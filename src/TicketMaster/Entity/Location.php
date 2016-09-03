<?php
namespace TicketMaster\Entity;

/**
 * Class Location
 * @package TicketMaster\Entity
 */
class Location
{
    /**
     * @var string
     */
    private $latitude;
    /**
     * @var string
     */
    private $longitude;

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return Location
     */
    public function setLatitude(string $latitude): Location
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return Location
     */
    public function setLongitude(string $longitude): Location
    {
        $this->longitude = $longitude;
        return $this;
    }

}
