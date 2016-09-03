<?php
namespace TicketMaster\Entity;


class Classification
{
    /**
     * @var bool
     */
    private $primary;
    /**
     * @var Segment
     */
    private $segment;
    /**
     * @var Genre
     */
    private $genre;
    /**
     * @var SubGenre
     */
    private $subGenre;

    /**
     * @return boolean
     */
    public function isPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * @param boolean $primary
     * @return Classification
     */
    public function setPrimary(bool $primary): Classification
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * @return Segment
     */
    public function getSegment(): Segment
    {
        return $this->segment;
    }

    /**
     * @param Segment $segment
     * @return Classification
     */
    public function setSegment(Segment $segment): Classification
    {
        $this->segment = $segment;
        return $this;
    }

    /**
     * @return Genre
     */
    public function getGenre(): Genre
    {
        return $this->genre;
    }

    /**
     * @param Genre $genre
     * @return Classification
     */
    public function setGenre(Genre $genre): Classification
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return SubGenre
     */
    public function getSubGenre(): SubGenre
    {
        return $this->subGenre;
    }

    /**
     * @param SubGenre $subGenre
     * @return Classification
     */
    public function setSubGenre(SubGenre $subGenre): Classification
    {
        $this->subGenre = $subGenre;
        return $this;
    }

}
