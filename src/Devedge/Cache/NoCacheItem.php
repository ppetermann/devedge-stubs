<?php

namespace Devedge\Cache\NoCache;

use Psr\Cache\CacheItemInterface;

/**
 * Class NoCacheItem, a cache that doesn't.
 *
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
     * as if..
     *
     * @param \Serializable $value
     * @param int $ttl
     * @returns boolean
     */
    public function set($value = null, $ttl = null)
    {
        return true;
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
     * Removes the current key from the cache.
     *
     * @return \Psr\Cache\CacheItemInterface
     *   The current item.
     */
    public function delete()
    {
        return $this;
    }

    /**
     * nope doesnt exist. ever
     * @return bool
     */
    public function exists()
    {
        return false;
    }

    /**
     * Returns the expiration time of a not-yet-expired cache item.
     *
     * If this cache item is a Cache Miss, this method MAY return the time at
     * which the item expired or the current time if that is not available.
     *
     * @return \DateTime
     *   The timestamp at which this cache item will expire.
     */
    public function getExpiration()
    {
        // expire now
        return new \DateTime();
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
