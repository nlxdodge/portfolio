<?php namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $host = $jigsaw->getConfig('host');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($host, $sitemap) {
            if (!strlen($path) == 0 && !$this->isAsset($path)) {
                $sitemap->addItem($host . $path, time(), Sitemap::WEEKLY);
            }
        });
        $sitemap->write();
    }

    public function isAsset($path)
    {
        return str_starts_with($path, '/assets');
    }
}
