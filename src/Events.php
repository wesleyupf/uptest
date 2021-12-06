<?php

namespace UpTest;

use UPFlex\MixUp\Core\Parent\PostType;
use UPFlex\MixUp\Core\Interfaces\IPostTypes;

class Events extends PostType implements IPostTypes
{
    protected static string $name = 'events';

    public function __construct()
    {
        self::setIcon('dashicons-groups');
        self::setPlural('Eventos');
        self::setSingular('Evento');
        self::setSlug('eventos');

        add_action('init', [self::class, 'register']);
    }
}