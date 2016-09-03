<?php
namespace TicketMaster\Entity;

/**
 * Class State
 * @package TicketMaster\Entity
 */
class State
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $stateCode;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return State
     */
    public function setName(string $name): State
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateCode(): string
    {
        return $this->stateCode;
    }

    /**
     * @param string $stateCode
     * @return State
     */
    public function setStateCode(string $stateCode): State
    {
        $this->stateCode = $stateCode;
        return $this;
    }
}
