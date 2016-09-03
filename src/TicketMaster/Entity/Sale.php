<?php
namespace TicketMaster\Entity;

/**
 * Class Sale
 * @package TicketMaster\Entity
 */
class Sale
{
    /**
     * @var \DateTime
     */
    private $startDateTime;

    /**
     * @var \DateTime
     */
    private $endDateTime;

    /**
     * @var bool
     */
    private $startTBD;

    /**
     * @return \DateTime
     */
    public function getStartDateTime(): \DateTime
    {
        return $this->startDateTime;
    }

    /**
     * @param \DateTime $startDateTime
     * @return Sale
     */
    public function setStartDateTime(\DateTime $startDateTime): Sale
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime(): \DateTime
    {
        return $this->endDateTime;
    }

    /**
     * @param \DateTime $endDateTime
     * @return Sale
     */
    public function setEndDateTime(\DateTime $endDateTime): Sale
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isStartTBD(): bool
    {
        return $this->startTBD;
    }

    /**
     * @param boolean $startTBD
     * @return Sale
     */
    public function setStartTBD(bool $startTBD): Sale
    {
        $this->startTBD = $startTBD;
        return $this;
    }
}
