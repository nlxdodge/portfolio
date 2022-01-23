<?php

return [
    'quote' => function () {
        $quotes = [
            '"You\'ve got to have a sense of humor to keep your sanity." – Lance Bass',
            '"Stand on the shoulders of giants." - Bernard of Chartres',
            '"Dream small or don\'t dream at all" - Lightning McQueen',
            '"All models are wrong, some are useful." - George Box',
            '"Never forget you are someone\'s reason to smile, because you are a joke." - Rimuru Tempest',
            '"Planning for failure is the worst type of planning" - Rick Sanchez',
            '"Words are about communicating" - Linus Sebastian',
            '"How can you move forward if you keep regretting the past?" - Edward Elric ',
            '"The worst battle is between what you know, and what you feel" - Voilet Evergarden',
            '"I know we said goodbye, but I didn\'t know. It was forever." - Voilet Evergarden',
        ];
        return $quotes[array_rand($quotes)];
    }
];