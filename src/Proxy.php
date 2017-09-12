<?php declare(strict_types = 1);

namespace Vantoozz\ProxyScraper;

/**
 * Class Proxy
 * @package Vantoozz\ProxyScraper
 */
final class Proxy
{
    /**
     * @var Ipv4
     */
    private $ipv4;

    /**
     * @var Port
     */
    private $port;

    /**
     * Proxy constructor.
     * @param Ipv4 $ipv4
     * @param Port $port
     */
    public function __construct(Ipv4 $ipv4, Port $port)
    {
        $this->ipv4 = $ipv4;
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->ipv4 . ':' . (string)$this->port;
    }

    /**
     * @return Ipv4
     */
    public function getIpv4(): Ipv4
    {
        return $this->ipv4;
    }

    /**
     * @return Port
     */
    public function getPort(): Port
    {
        return $this->port;
    }
}
