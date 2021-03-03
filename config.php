<?php

use Illuminate\Support\Str;

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
            'sort' => 'order',
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
];
