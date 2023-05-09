<?php

/**
 * SoBold A
*/

define('BASE_PATH', __DIR__);

if (!file_exists($autoload = BASE_PATH . '/vendor/autoload.php')) {
    $err = new \WP_Error('no_composer', 'Composer is not installed and an autoload was not found.');
    echo $err->get_error_message();
    exit;
}

require $autoload;

\A\A::init();
