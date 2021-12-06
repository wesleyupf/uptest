<?php

namespace UpTest;

use UPFlex\MixUp\Core\Base;

class Assets extends Base
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [self::class, 'enqueue_scripts'], 20);
    }

    public static function add()
    {
        wp_enqueue_style(
            'test',
            get_stylesheet_directory_uri() . '/style.css',
            [
                'hello-elementor',
            ],
            '1.0.0'
        );
    }
}