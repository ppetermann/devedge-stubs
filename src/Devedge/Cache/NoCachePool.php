<?php

namespace Devedge\Cache\NoCache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Class will always return non-hits
 */
class NoCachePool implements CacheItemPoolInterface
{
    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasItem($key)
    {
        return false;
    }

    /**
     * @param string $key
     * @return NoCacheItem|\Psr\Cache\CacheItemInterface
     */
    public function getItem($key)
    {
        return new NoCacheItem($key);
    }

    /**
     * @param array $keys
     * @return array|\Traversable
     */
    public function getItems(array $keys = array())
    {
        $result = [];
        foreach ($keys as $key) {
            $result[$key] = $this->getItem($key);
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function clear()
    {
        return true;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function deleteItem($key)
    {
        return true;
    }

    /**
     * Removes multiple items from the pool.
     *
     * @param array $keys
     * An array of keys that should be removed from the pool.
     * @return bool
     * The invoked object.
     */
    public function deleteItems(array $keys)
    {
        return true;
    }

    /**
     * Persists a cache item immediately.
     *
     * @param CacheItemInterface $item
     *   The cache item to save.
     *
     * @return true
     */
    public function save(CacheItemInterface $item)
    {
        return true;
    }

    /**
     * Sets a cache item to be persisted later.
     *
     * @param CacheItemInterface $item
     *   The cache item to save.
     * @return bool
     */
    public function saveDeferred(CacheItemInterface $item)
    {
        return true;
    }

    /**
     * Persists any deferred cache items.
     *
     * @return bool
     */
    public function commit()
    {
        return true;
    }
}
