<?php
/**
 * Главный конфигурационный файл
 */

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My homepage',

    // preloading 'log' component
    'preload' => array('log'),

    // контроллер по-умолчанию
    'defaultController' => 'main',

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    'modules' => array(),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(),
        ),
        //'db' => require(dirname(__FILE__) . 'db.php'),
        'errorHandler' => array(),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),

    'params' => array(
        'adminEmail' => 'AzatXaker@gmail.com',
    ),
);
