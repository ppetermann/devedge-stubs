<?php

namespace Devedge\Cache\NoCache;

use Psr\Cache\CacheItemInterface;

/**
 * Class NoCacheItem, a cache that doesn't.
 */
class NoCacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * always null since we don't cache
     * @return \Serializable|mixed
     */
    public function get()
    {
        return null;
    }

    /**
     * Sets the value represented by this cache item.
     *
     * @param \Serializable $value
     * @param int $ttl
     * @returns static
     */
    public function set($value = null, $ttl = null)
    {
        return $this;
    }

    /**
     * we never hit the cache since we dont cache
     * @return bool
     */
    public function isHit()
    {
        return false;
    }

    /**
     * Sets the expiration time for this cache item.
     *
     * @param \DateTimeInterface $expiration
     *   The point in time after which the item MUST be considered expired.
     *   If null is passed explicitly, a default value MAY be used. If none is set,
     *   the value should be stored permanently or for as long as the
     *   implementation allows.
     *
     * @return static
     *   The called object.
     */
    public function expiresAt($expiration)
    {
        return $this;
    }

    /**
     * Sets the expiration time for this cache item.
     *
     * @param int|\DateInterval $time
     *   The period of time from the present after which the item MUST be considered
     *   expired. An integer parameter is understood to be the time in seconds until
     *   expiration.
     *
     * @return static
     *   The called object.
     */
    public function expiresAfter($time)
    {
        return $this;
    }
}
