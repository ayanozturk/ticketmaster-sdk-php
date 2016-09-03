<?php
namespace TicketMaster\Entity;


class SubGenre
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
     * @return SubGenre
     */
    public function setId(string $id): SubGenre
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
     * @return SubGenre
     */
    public function setName(string $name): SubGenre
    {
        $this->name = $name;
        return $this;
    }

}
