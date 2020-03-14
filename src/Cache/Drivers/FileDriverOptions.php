<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache\Drivers;


class FileDriverOptions
{
    protected string $cachepath;

    public function setCacheFolder(string $path)
    {
        $this->cachepath = $path;
    }

    public function getCacheFolder(): string
    {
        return $this->cachepath;
    }
}