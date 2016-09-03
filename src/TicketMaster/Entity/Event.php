<?php
namespace TicketMaster\Entity;

/**
 * Class Event
 * @package TicketMaster\Entity
 */
class Event
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var Promoter
     */
    protected $promoter;

    /**
     * @var Image[]
     */
    protected $images;

    /**
     * @var Classification[]
     */
    protected $classifications;

    /**
     * @var \DateTime
     */
    protected $dates;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var Sale
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
    public function setId(string $id)
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
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
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
    public function setLocale(string $locale)
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
    public function setUrl(string $url)
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
    public function setPromoter(Promoter $promoter)
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
    public function setImages($images)
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
    public function setClassifications(array $classifications)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDates(): \DateTime
    {
        return $this->dates;
    }

    /**
     * @param \DateTime $dates
     * @return Event
     */
    public function setDates(\DateTime $dates)
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
    public function setTest(bool $test)
    {
        $this->test = $test;
        return $this;
    }

    /**
     * @return Sale
     */
    public function getSales(): Sale
    {
        return $this->sales;
    }

    /**
     * @param Sale $sales
     * @return Event
     */
    public function setSales(Sale $sales)
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
    public function setGroupId(string $groupId)
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
    public function setInfo(string $info)
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
    public function setPleaseNote(string $pleaseNote)
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
     * @return $this
     */
    public function setCategories(array $categories)
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
     * @return $this
     */
    public function setVenues(array $venues)
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
     * @return $this
     */
    public function setAttractions(array $attractions)
    {
        $this->attractions = $attractions;
        return $this;
    }

}
