<?php

ini_set("display_errors", 1);

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));
define("APPLICATION_ROOT", realpath(dirname(__DIR__)));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Autoloader
include('library/Zend/Loader/AutoloaderFactory.php');

Zend\Loader\AutoloaderFactory::factory(array(
    'Zend\Loader\StandardAutoloader' => array(
        'autoregister_zf' => true,
        'namespaces' => array(
        )
    )
));

// Run the application!
Zend\Mvc\Application::init(require 'config/application.php')->run();