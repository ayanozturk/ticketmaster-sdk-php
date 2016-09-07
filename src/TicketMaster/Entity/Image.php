<?php
namespace TicketMaster\Entity;

/**
 * Class Image
 * @package TicketMaster\Entity
 */
class Image
{
    /**
     * @Type("string")
     * @var string
     */
    private $url;

    /**
     * @Type("string")
     * @var string
     */
    private $ratio;

    /**
     * @Type("integer")
     * @var int
     */
    private $width;

    /**
     * @Type("integer")
     * @var int
     */
    private $height;

    /**
     * @Type("boolean")
     * @var bool
     */
    private $fallback;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Image
     */
    public function setUrl(string $url): Image
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getRatio(): string
    {
        return $this->ratio;
    }

    /**
     * @param string $ratio
     * @return Image
     */
    public function setRatio(string $ratio): Image
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Image
     */
    public function setWidth(int $width): Image
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Image
     */
    public function setHeight(int $height): Image
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFallback(): bool
    {
        return $this->fallback;
    }

    /**
     * @param bool $fallback
     * @return Image
     */
    public function setFallback(bool $fallback): Image
    {
        $this->fallback = $fallback;
        return $this;
    }

}
