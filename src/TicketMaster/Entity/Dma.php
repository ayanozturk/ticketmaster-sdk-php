<?php
namespace TicketMaster\Entity;

/**
 * Class Dma
 * @package TicketMaster\Entity
 */
class Dma
{
    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Dma
     */
    public function setId(string $id): Dma
    {
        $this->id = $id;
        return $this;
    }

}
