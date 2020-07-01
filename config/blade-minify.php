<?php

return [
    'enabled' => env('BLADE_MINIFY_ENABLED', true),

    'options' => [
        'cssMinifier' => [\Minify_CSSmin::class, 'minify'],
        'jsMinifier' => [\JSMin\JSMin::class, 'minify'],
    ],
];
