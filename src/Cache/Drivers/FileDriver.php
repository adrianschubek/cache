<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache\Drivers;


use adrianschubek\Cache\Util;

class FileDriver implements CacheDriverInterface
{
    private FileDriverOptions $options;

    public function __construct(FileDriverOptions $options)
    {
        $this->options = $options;
    }

    public function set(string $key, $value)
    {
        Util::putFile(
            $this->options->getCacheFolder() . "/" . hash("sha256", $key) . "/data.txt",
            serialize($value)
        );
    }

    public function get(string $key)
    {
        return unserialize(
            Util::getFile($this->options->getCacheFolder() . "/" . hash("sha256", $key) . "/data.txt")
        );
    }

    public function isExpired(string $key): bool
    {
        // TODO: Implement isExpired() method.
    }
}