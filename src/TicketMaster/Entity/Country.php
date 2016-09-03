<?php
namespace TicketMaster\Entity;

/**
 * Class Country
 * @package TicketMaster\Entity
 */
class Country
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $countryCode;
    /**
     * @return string
     */

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Country
     */
    public function setCountryCode(string $countryCode): Country
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
