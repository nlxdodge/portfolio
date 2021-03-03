<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use WebPConvert\WebPConvert;



class ConvertToWebp
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())->each(function ($path) {
            if ($this->isImage($path)) {
                $root = dirname(__DIR__);
                $extension = pathinfo($path, PATHINFO_EXTENSION);
                $source = $root . '/build_local' . $path;
                $destination = $root . '/build_local' . str_replace('.' . $extension, '', $path) . '.webp';
                WebPConvert::convert($source, $destination);
            }
        });
    }

    public function isImage($path)
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $types = ['png', 'jpg', 'jpeg', 'gif'];
        return in_array($extension, $types);
    }
}
