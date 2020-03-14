<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Cache;


class Util
{
    public static function putFile(string $path, string $content)
    {
        $path = explode("/", $path);
        $file = array_pop($path);
        $path = implode("/", $path);

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($path . "/" . $file, $content, FILE_APPEND);
    }

    public static function getFile(string $path)
    {
        return file_get_contents($path);
    }
}