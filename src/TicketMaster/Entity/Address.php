<?php
namespace TicketMaster\Entity;

/**
 * Class Address
 * @package TicketMaster\Entity
 */
class Address
{
    /**
     * @var string
     */
    private $line1;
    /**
     * @var string
     */
    private $line2;

    /**
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     * @return Address
     */
    public function setLine1(string $line1): Address
    {
        $this->line1 = $line1;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine2(): string
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     * @return Address
     */
    public function setLine2(string $line2): Address
    {
        $this->line2 = $line2;
        return $this;
    }

}
