<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'title' => 'Gerben Veenhof',
    'contact_email' => 'contact@gerbenveenhof.nl',
    'description' => 'This is my personal website, find software, mods or other programs that I wrote or contact me for more information.',
    'collections' => [
        'works' => [
            'path' => 'work/{filename}',
            'header_image' => '',
            'category' => 'minecraft',
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
