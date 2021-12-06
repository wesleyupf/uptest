<?php
/**
 * Theme functions and definitions
 *
 * @package UPTest
 */

use UPFlex\MixUp\Core\Base;
use UPFlex\MixUp\Core\Instance\Create;

require_once __DIR__ . '/vendor/autoload.php';

define('UPTEST_DIR', get_stylesheet_directory(__FILE__));
define('UPTEST_URL', get_stylesheet_directory_uri(__FILE__));

# Front
Create::run(
    'UpTest',
    Base::class,
    [],
    UPTEST_DIR
);