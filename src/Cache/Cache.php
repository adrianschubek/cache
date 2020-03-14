<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache;


use adrianschubek\Cache\Drivers\CacheDriverInterface;

class Cache
{
    private CacheDriverInterface $driver;

    public function __construct(CacheDriverInterface $driver)
    {
        $this->driver = $driver;
    }

    public function set(string $key, $value)
    {
        $this->driver->set($key, $value);
    }

    public function get(string $key)
    {
        $this->driver->get($key);
    }
}