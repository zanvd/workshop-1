<?php

/**
 * Make all paths relative to project root dir
 */
chdir(dirname(__DIR__));


require 'vendor/autoload.php';

try {
    \Workshop\Application\Application::init('config/config.php')->run();
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}
