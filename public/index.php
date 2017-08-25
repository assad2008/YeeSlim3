<?php

/**
 * @Filename: index.php
 * @Author: assad
 * @Date:   2017-08-25 10:04:32
 * @Synopsis: 入口文件
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-25 10:34:58
 * @Email: rlk002@gmail.com
 */

define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", realpath(dirname(__DIR__)) . DS);
define("VENDOR_PATH", ROOT_PATH . "vendor" . DS);
define("APP_PATH", ROOT_PATH . "app" . DS);

require VENDOR_PATH . 'autoload.php';

use Tracy\Debugger;
Debugger::enable(Debugger::DEVELOPMENT);
Debugger::$showBar = false;

require APP_PATH . 'bootstrap.php';

$app->run();
