<?php
namespace TicketMaster\Api;

use GuzzleHttp\Client;

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

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

    protected $client;

    public function __construct()
    {
        $this->setClient(new Client([
            'base_uri' => $this->getUrl()
        ]));
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return AbstractApi
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
        return $this;
    }

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
