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
    private static $url = 'https://app.ticketmaster.com/';

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
    public function setUrl(string $url)
    {
        self::$url = $url;
    }

    /**
     * @return string
     */
    public static function getUrl(): string
    {
        return self::$url;
    }

}
