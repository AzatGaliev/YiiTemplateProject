<?php
/**
 * Конфигурационный файл консольных приложений
 *
 * Включает специфичные для консоли опции и ком-ты,
 * беря за основу главный конфигурационный файл
 * приложения
 */

return CMap::mergeArray(require(dirname(__FILE__) . '/main.php'), array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My homepage (console)',

    // preloading 'log' component
    'preload' => array('log'),

    // application components
    'components' => array(
        'db' => require('db.php'),
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
));
