<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use WebPConvert\WebPConvert;



class ConvertToWebp
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())->each(function ($path) {
            if ($this->rightPath($path) && $this->isImage($path)) {
                $root = dirname(__DIR__);
                $extension = pathinfo($path, PATHINFO_EXTENSION);
                $source = $root . '/build_production' . $path;
                $destination = $root . '/build_production' . str_replace('.' . $extension, '', $path) . '.webp';
                print("Destination: " . $destination . "\n");
                WebPConvert::convert($source, $destination);
            }
        });
    }

    public function rightPath($path)
    {
        return str_contains($path, "/assets/images/");
    }

    public function isImage($path)
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $types = ['png', 'jpg', 'jpeg'];
        return in_array($extension, $types);
    }
}
