<?php
namespace TicketMaster\Entity;


class Market
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
     * @return Market
     */
    public function setId(string $id): Market
    {
        $this->id = $id;
        return $this;
    }

}
