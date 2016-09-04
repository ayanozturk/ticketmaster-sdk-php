<?php
namespace TicketMaster\Entity;

/**
 * Class Venue
 * @package TicketMaster\Entity
 */
class Venue
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
    private  $postalCode;

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
     * @return Venue
     */
    public function setId(string $id):Venue
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
     * @return Venue
     */
    public function setName(string $name): Venue
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
     * @return Venue
     */
    public function setLocale(string $locale): Venue
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
     * @return Venue
     */
    public function setUrl(string $url): Venue
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
     * @return Venue
     */
    public function setMarkets(array $markets): Venue
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
     * @return Venue
     */
    public function setDmas(array $dmas): Venue
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
     * @return Venue
     */
    public function setCountry(Country $country): Venue
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
     * @return Venue
     */
    public function setState(State $state): Venue
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
     * @return Venue
     */
    public function setCity(City $city)
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
     * @return Venue
     */
    public function setLocation(Location $location): Venue
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
     * @return Venue
     */
    public function setPostalCode(string $postalCode): Venue
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
     * @return Venue
     */
    public function setAddress(Address $address): Venue
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
     * @return Venue
     */
    public function setTimezone(string $timezone): Venue
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTest(): bool
    {
        return $this->test;
    }

    /**
     * @param bool $test
     * @return Venue
     */
    public function setTest(bool $test): Venue
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
     * @return Venue
     */
    public function setSource(Source $source): Venue
    {
        $this->source = $source;
        return $this;
    }

}
