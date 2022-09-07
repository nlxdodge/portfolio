<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use WebPConvert\WebPConvert;


class ConvertToWebp
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())->each(function ($path) use(&$jigsaw) {
            $root = dirname(__DIR__);
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $source = $root . "/build_" . $jigsaw->getEnvironment() . $path;
            $destination = $root . "/build_" . $jigsaw->getEnvironment() . str_replace("." . $extension, "", $path) . ".webp";
            if ($this->canConvertToWebp($path) && !file_exists($destination)) {
                WebPConvert::convert($source, $destination, [
                    "converters" => [
                        "cwebp"
                    ],
                    "command-line-options" => "-mt"
                ]);
            }

            // if($this->canConvertToWebp($path)) {
            //     echo("Parsing for Phone now:" . $path . "\r\n");
            //     $destinationPhone = $root . "/build_" . $jigsaw->getEnvironment() . str_replace("." . $extension, "", $path) . "_phone.webp";    
            //     $originalImageSize = getimagesize($source);

            //     echo $originalImageSize[0] . "\r\n";
            //     echo $originalImageSize[1] . "\r\n";
    
            //     $newWidth = round($originalImageSize[0] / 3.77);
            //     $newHeight = round($originalImageSize[1] / 1.28);
    
            //     $startX = max(0, $originalImageSize[0] / 2 - $newWidth / 2);
            //     $startY = max(0, $originalImageSize[1] / 2 - $newHeight / 2);
    
            //     $cropString = "-mt -crop " . round($startX) . " " . round($startY) . " " . $newWidth . " " . $newHeight;
    
            //     if (!file_exists($destinationPhone)) {
            //         echo("Generating with config: " . $cropString . "\r\n");
            //         WebPConvert::convert($source, $destinationPhone, [
            //             "converters" => [
            //                 "cwebp"
            //             ],
            //             "command-line-options" => $cropString
            //         ]);
            //     }
            // }
        });
    }

    public function canConvertToWebp($path)
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        if(str_contains($path, "/favicons/")) {
            return false;
        }
        $types = ["png", "jpg", "jpeg"];
        return in_array($extension, $types);
    }
}
