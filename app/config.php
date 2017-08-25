<?php

/**
 * @Filename: config.php
 * @Author: assad
 * @Date:   2017-08-25 10:11:29
 * @Synopsis:
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-25 10:21:35
 * @Email: rlk002@gmail.com
 */

return [
    'settings' =>
    [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'logger' => [
            'name' => 'yeeslim',
            'path' => ROOT_PATH . 'data/logs' . DS . date("Y-m-d") . '_app.log',
        ],
        'cache' => [
            'path' => ROOT_PATH . 'data/cache',
            'ext' => '.cache',
        ],
        'db' => [
            "default" =>
            [
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'newyeeslim',
                'username' => 'newyeeslim',
                'password' => 'newyeeslim',
                'charset' => 'utf8',
                'collation' => 'utf8_general_ci',
                'prefix' => '',
            ],
        ],
        'templates' => [
            'cache_dir' => ROOT_PATH . 'views' . DS . 'cache',
            'template_dir' => ROOT_PATH . 'views' . DS . 'views',
        ],
    ],
];
