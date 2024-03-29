<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

return [
    'production' => false,
    'title' => 'Gerben Veenhof | Portfolio | Blog',
    'host' => 'http://localhost:3000',
    'description' => 'This is my personal portfolio/blogging website, find applications, software, mods or other programs that I wrote for school or my job or contact me for more info or just to have a quick chat.',
    'collections' => [
        'works' => [
            'path' => 'work/{filename}',
            'header_image' => '',
            'category' => 'application',
            'sort' => '-date',
        ],
        'posts' => [
            'path' => 'post/{filename}',
            'author' => 'Gerben Veenhof',
            'sort' => '-date',
        ],
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'old' => function ($page) {
        $now = Carbon::now()->subYear(2);
        $lastModified = new Carbon($page->date);
        return $now->greaterThan($lastModified);
    },
    'getIcon' => function ($page, $url) {
        $icon = "fas fa-link"; 
        if(Str::contains($url, "github.com")) {
            $icon = "fab fa-github";
        }
        if(Str::contains($url, "linkedin.com")) {
            $icon = "fab fa-linkedin";
        }
        if(Str::contains($url, "twitter.com")) {
            $icon = "fab fa-twitter";
        }
        if(Str::contains($url, "mailto")) {
            $icon = "fas fa-envelope";
        }
        return $icon;
    }
];
