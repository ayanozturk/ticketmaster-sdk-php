<?php
namespace TicketMaster\Entity;

/**
 * Class Attraction
 * @package TicketMaster\Entity
 */
class Attraction
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
     * @var string
     */
    private $locale;
    /**
     * @var string
     */
    private $url;
    /**
     * @var Market[]
     */
    private $markets;
    /**
     * @var Dma[]
     */
    private $dmas;
    /**
     * @var Country
     */
    private $country;
    /**
     * @var State
     */
    private $state;
    /**
     * @var City
     */
    private $city;
    /**
     * @var Location
     */
    private $location;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var Address
     */
    private $address;
    /**
     * @var string
     */
    private $timezone;
    /**
     * @var bool
     */
    private $test;
    /**
     * @var Source
     */
    private $source;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Attraction
     */
    public function setId(string $id): Attraction
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
     * @return Attraction
     */
    public function setName(string $name): Attraction
    {
        $this->name = $name;
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
     * @return Attraction
     */
    public function setLocale(string $locale): Attraction
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
     * @return Attraction
     */
    public function setUrl(string $url): Attraction
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Market[]
     */
    public function getMarkets(): array
    {
        return $this->markets;
    }

    /**
     * @param Market[] $markets
     * @return Attraction
     */
    public function setMarkets(array $markets): Attraction
    {
        $this->markets = $markets;
        return $this;
    }

    /**
     * @return Dma[]
     */
    public function getDmas(): array
    {
        return $this->dmas;
    }

    /**
     * @param Dma[] $dmas
     * @return Attraction
     */
    public function setDmas(array $dmas): Attraction
    {
        $this->dmas = $dmas;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Attraction
     */
    public function setCountry(Country $country): Attraction
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * @param State $state
     * @return Attraction
     */
    public function setState(State $state): Attraction
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return City
     */
    public function getCity(): City
    {
        return $this->city;
    }

    /**
     * @param City $city
     * @return Attraction
     */
    public function setCity(City $city): Attraction
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return Attraction
     */
    public function setLocation(Location $location): Attraction
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Attraction
     */
    public function setPostalCode(string $postalCode): Attraction
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Attraction
     */
    public function setAddress(Address $address): Attraction
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return Attraction
     */
    public function setTimezone(string $timezone): Attraction
    {
        $this->timezone = $timezone;
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
     * @return Attraction
     */
    public function setTest(bool $test): Attraction
    {
        $this->test = $test;
        return $this;
    }

    /**
     * @return Source
     */
    public function getSource(): Source
    {
        return $this->source;
    }

    /**
     * @param Source $source
     * @return Attraction
     */
    public function setSource(Source $source): Attraction
    {
        $this->source = $source;
        return $this;
    }

}
