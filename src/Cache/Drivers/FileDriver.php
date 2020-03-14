<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache\Drivers;


class FileDriver implements CacheDriverInterface
{
    private FileDriverOptions $options;

    public function __construct(?FileDriverOptions $options)
    {
        $this->options = $options ?? new FileDriverOptions();
    }

    public function set(string $key, $value)
    {

    }

    public function get(string $key, $value)
    {
        // TODO: Implement get() method.
    }

    public function isExpired(string $key): bool
    {
        // TODO: Implement isExpired() method.
    }
}