<?php

declare(strict_types=1);

namespace TicketMaster\Entity;

class Genre
{
    private string $id;
    private string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Genre
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Genre
    {
        $this->name = $name;
        return $this;
    }
}
