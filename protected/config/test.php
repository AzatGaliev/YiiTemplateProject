<?php
/**
 * Конфигурационный файл функциональный тестов
 *
 * Включает специфичные для тестов опции и ком-ты,
 * беря за основу главный конфигурационный файл
 * приложения
 */

return CMap::mergeArray(require(dirname(__FILE__) . '/main.php'), array(
    'components' => array(
        'fixture' => array(
            'class' => 'system.test.CDbFixtureManager',
        ),
    ),
));
