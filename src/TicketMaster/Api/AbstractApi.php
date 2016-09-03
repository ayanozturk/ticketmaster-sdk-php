<?php
namespace TicketMaster\Api;

/**
 * Class AbstractApi
 * @package TicketMaster\Api
 */
abstract class AbstractApi
{
    /**
     * @var string
     */
    protected $key = 'YOUR-API-KEY';

    /**
     * @var string
     */
    protected $url = 'https://app.ticketmaster.com/';
    
    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
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
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

}
