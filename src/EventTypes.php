<?php

namespace UpTest;

use UPFlex\MixUp\Core\Parent\Taxonomy;

class EventTypes extends Taxonomy
{
    protected static string $name = 'event_types';

    public function __construct()
    {
        self::setPlural('Tipos');
        self::setSingular('Tipo');
        self::setSlug('tipos-de-evento');
        self::setPostTypes([Events::getName()]);

        add_action('init', [self::class, 'register']);
    }
}