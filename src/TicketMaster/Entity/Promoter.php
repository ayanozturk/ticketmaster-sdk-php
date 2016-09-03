<?php
namespace TicketMaster\Entity;

/**
 * Class Promoter
 * @package TicketMaster\Entity
 */
class Promoter
{

    /**
     * @var
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
     * @return Promoter
     */
    public function setId(string $id): Promoter
    {
        $this->id = $id;
        return $this;
    }
}
