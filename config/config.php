<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

return new \Phalcon\Config(array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => '',
        'username' => '',
        'password' => '',
        'dbname' => '',
        'charset' => 'utf8',
    ),
    'application' => array(
        'modelsDir' => APP_PATH . '/models/',
        'viewsDir' => APP_PATH . '/views/',
        'libraryDir' => APP_PATH . '/library/',
        'baseUri' => '/'
    )
        ));
