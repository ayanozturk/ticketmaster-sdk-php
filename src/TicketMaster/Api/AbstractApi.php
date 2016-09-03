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
    private static $key = 'YOUR-API-KEY';

    /**
     * @var string
     */
    private $url = 'https://app.ticketmaster.com/';

    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        self::$key = $key;
    }

    /**
     * @return string
     */
    public static function getKey(): string
    {
        return self::$key;
    }

    /**
     * @param string $url
     */
    protected function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return $this->url;
    }

}
