<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache\Drivers;


class FileDriverOptions
{
    protected string $cachepath;

    public function setCacheFolder(string $path): self
    {
        $this->cachepath = $path;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        return $this;
    }

    public function getCacheFolder(): string
    {
        return $this->cachepath;
    }
}