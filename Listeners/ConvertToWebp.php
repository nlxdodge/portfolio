<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use WebPConvert\WebPConvert;


class ConvertToWebp
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())->each(function ($path) use(&$jigsaw) {
            if ($this->isAsset($path) && $this->isImage($path)) {
                $root = dirname(__DIR__);
                $extension = pathinfo($path, PATHINFO_EXTENSION);
                $source = $root . '/build_' . $jigsaw->getEnvironment() . $path;
                $destination = $root . '/build_' . $jigsaw->getEnvironment() . str_replace('.' . $extension, '', $path) . '.webp';
                WebPConvert::convert($source, $destination, [
                    'converters' => [
                        'imagemagick'
                    ],
                ]);
            }
        });
    }

    public function isAsset($path)
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
