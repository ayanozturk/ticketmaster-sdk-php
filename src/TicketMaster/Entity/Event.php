<?php
namespace TicketMaster\Entity;


/**
 * Class Event
 * @package TicketMaster\Entity
 */
class Event
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @Type("string")
     * @var string
     */
    protected $name;

    /**
     * @Type("string")
     * @var string
     */
    protected $description;

    /**
     * @Type("string")
     * @var string
     */
    protected $locale;

    /**
     * @Type("string")
     * @var string
     */
    protected $url;

    /**
     * @var Promoter
     */
    protected $promoter;

    /**
     * @Type("ArrayCollection<TicketMaster\Entity\Image>")
     * @var Image[]
     */
    protected $images;

    /**
     * @var Classification[]
     */
    protected $classifications;

    /**
     * @var array
     */
    protected $dates;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $test;

    /**
     * @var Sale[]
     */
    protected $sales;

    /**
     * @var string
     */
    protected $groupId;

    /**
     * @var string
     */
    protected $info;

    /**
     * @var string
     */
    protected $pleaseNote;

    /**
     * @var Attraction[]
     */
    protected $attractions;

    /**
     * @var Venue[]
     */
    protected $venues;

    /**
     * @var Category[]
     */
    protected $categories;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Event
     */
    public function setId(string $id): Event
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
     * @return Event
     */
    public function setName(string $name): Event
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Event
     */
    public function setDescription(string $description): Event
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return Event
     */
    public function setLocale(string $locale): Event
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Event
     */
    public function setUrl(string $url): Event
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Promoter
     */
    public function getPromoter(): Promoter
    {
        return $this->promoter;
    }

    /**
     * @param Promoter $promoter
     * @return Event
     */
    public function setPromoter(Promoter $promoter): Event
    {
        $this->promoter = $promoter;
        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param Image[] $images
     * @return Event
     */
    public function setImages($images): Event
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return Classification[]
     */
    public function getClassifications(): array
    {
        return $this->classifications;
    }

    /**
     * @param Classification[] $classifications
     * @return Event
     */
    public function setClassifications(array $classifications): Event
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * @return array
     */
    public function getDates(): array
    {
        return $this->dates;
    }

    /**
     * @param array $dates
     * @return Event
     */
    public function setDates(array $dates): Event
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isTest(): bool
    {
        return $this->test;
    }

    /**
     * @param boolean $test
     * @return Event
     */
    public function setTest(bool $test): Event
    {
        $this->test = $test;
        return $this;
    }

    /**
     * @return Sale[]
     */
    public function getSales(): array
    {
        return $this->sales;
    }

    /**
     * @param Sale[] $sales
     * @return Event
     */
    public function setSales(array $sales): Event
    {
        $this->sales = $sales;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return Event
     */
    public function setGroupId(string $groupId): Event
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return Event
     */
    public function setInfo(string $info): Event
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return string
     */
    public function getPleaseNote(): string
    {
        return $this->pleaseNote;
    }

    /**
     * @param string $pleaseNote
     * @return Event
     */
    public function setPleaseNote(string $pleaseNote): Event
    {
        $this->pleaseNote = $pleaseNote;
        return $this;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Category[] $categories
     * @return Event
     */
    public function setCategories(array $categories): Event
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return Venue[]
     */
    public function getVenues(): array
    {
        return $this->venues;
    }

    /**
     * @param Venue[] $venues
     * @return Event
     */
    public function setVenues(array $venues): Event
    {
        $this->venues = $venues;
        return $this;
    }

    /**
     * @return Attraction[]
     */
    public function getAttractions(): array
    {
        return $this->attractions;
    }

    /**
     * @param Attraction[] $attractions
     * @return Event
     */
    public function setAttractions(array $attractions): Event
    {
        $this->attractions = $attractions;
        return $this;
    }

}
