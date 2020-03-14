<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache\Drivers;


interface CacheDriverInterface
{
    public function set(string $key, $value);

    public function get(string $key);

    public function isExpired(string $key): bool;
}