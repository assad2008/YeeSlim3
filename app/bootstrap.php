<?php

/**
 * @Filename: bootstrap.php
 * @Author: assad
 * @Date:   2017-08-25 10:10:01
 * @Synopsis:
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-25 10:36:27
 * @Email: rlk002@gmail.com
 */

session_start();
date_default_timezone_set('Asia/Shanghai');
$config = require __DIR__ . "/config.php";

$app = new \Slim\App($config);
$container = $app->getContainer();

/**
 * 初始化数据库
 */
$capsule = new Illuminate\Database\Capsule\Manager();
$db = $config["settings"]['db'];
foreach ($db as $key => $value) {
    $capsule->addConnection($value, $key);
}
$capsule->setAsGlobal();
$capsule->bootEloquent();
$capsule->getConnection()->enableQueryLog();
class_alias("Illuminate\Database\Capsule\Manager", "DB");

/**
 * 初始化缓存
 */
$cache = new \Doctrine\Common\Cache\FilesystemCache($container->get('settings')['cache']['path'], $container->get('settings')['cache']['ext']);
Zend_Registry::set("cache", $cache);

/**
 * 注入配置信息
 */
$container['config'] = function ($c) {
    return $c->get('settings');
};

/**
 * 注入缓存
 */
$container['cache'] = function ($c) use ($cache) {
    return $cache;
};

/**
 * 注入日志功能
 */
$container['log'] = function ($c) {
    $logger = new Monolog\Logger($c->get('settings')['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($c->get('settings')['logger']['path'],
        Monolog\Logger::DEBUG));
    return $logger;
};

/**
 * 加载视图
 */
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig($c->get("settings")["templates"]["template_dir"],
        [
            'cache' => $c->get("settings")["templates"]["cache_dir"],
            'auto_reload' => true,
            'charset' => 'utf-8',
        ]);
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
    return $view;
};

$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};

$container['csrf'] = function ($container) {
    return new \Slim\Csrf\Guard;
};

/**
 * 404
 */
$container['notFoundHandler'] = function ($c) {
    $view = $c->get('view');
    return function ($request, $response, $exception) use ($container, $view) {
        return $view->render($response, "common/404.html");
    };
};

/**
 * 500
 */
$container['1errorHandler'] = function ($c) {
    $view = $c->get('view');
    return function ($request, $response, $exception) use ($container, $view) {
        return $view->render($response, "common/500.html");
    };
};

/**
 * 500
 */
$container['1phpErrorHandler'] = function ($c) {
    $view = $c->get('view');
    return function ($request, $response, $exception) use ($container, $view) {
        return $view->render($response, "common/500.html");
    };
};

$app->add($container->csrf);

require __DIR__ . '/routers.php';
