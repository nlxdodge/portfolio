<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'title' => 'Gerben Veenhof',
    'contact_email' => 'contact@gerbenveenhof.nl',
    'description' => 'This is my personal website, find software, mods or other programs that I wrote or contact me for more information',
    'collections' => [
        'works' => [
            'path' => 'work/{filename}',
            'sort' => 'last_name',
        ],
        'posts' => [
            'path' => 'post/{filename}',
            'author' => 'Gerben Veenhof',
        ],
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
