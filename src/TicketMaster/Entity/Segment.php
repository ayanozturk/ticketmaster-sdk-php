<?php
namespace TicketMaster\Entity;


class Segment
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Segment
     */
    public function setId(string $id): Segment
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Segment
     */
    public function setName(string $name): Segment
    {
        $this->name = $name;
        return $this;
    }

}
