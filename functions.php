<?php

namespace noleam\theme;

use noleam\NoleamTheme;

if (class_exists('noleam\NoleamTheme')) {
    NoleamTheme::instance()->init([
            'styles' => [
                [
                    'handle' => 'choices',
                    'file' => 'vendor/choices.min.css'],
                [
                    'handle' => 'cd2023',
                    'file' => 'style.css', 'deps' => [
                    'choices',
                ]
                ],
            ],

            'scripts' => [
                'noleam' => [
                    'type' => 'module',
                    'handle' => 'noleam',
                    'file' => 'noleam.js',
                    'deps' => ['choices']
                ],
                'choices' => [
                    'handle' => 'choices',
                    'file' => 'vendor/choices/choices.min.js',
                ],
            ],
            'menus' => [
                ['slug' => 'shop-menu', 'name' => 'Shop'],
                ['slug' => 'main-menu', 'name' => 'Main']

            ],
            'add_theme_support' => ['editor-styles', 'wp-block-styles', 'align-wide', 'block-template-parts', 'block-template'],
            'add_editor_style' => ['style.css'],
        ]
    );
} else {
    echo __('Noleam Plugin is required !');
}