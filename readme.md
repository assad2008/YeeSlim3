Slim3 项目骨架
=============

## 文档
**SLIM FRAMEWORK :**  http://docs.slimframework.com/

## 相关包

	"slim/slim": "^3.8",
	"illuminate/database": "^5.4",
	"slim/csrf": "^0.8.1",
	"twig/twig": "^2.4",
	"tracy/tracy": "^2.4",
	"zf1/zend-registry": "^1.12",
	"leeoniya/dump-r": "^2.1",
	"doctrine/cache": "^1.6",
	"slim/twig-view": "^2.2",
	"slim/flash": "^0.2.0"


## 骨架结构

	├── app   - 项目目录
	│   ├── bootstrap.php     - 启动文件
	│   ├── config.php        - 配置文件
	│   ├── Controllers       - 控制器目录
	│   ├── Models            - 模型目录
	│   └── routers.php       - 路由
	├── composer.json
	├── composer.lock
	├── data                  - 缓存日志存放
	│   ├── cache
	│   └── logs
	├── public                - 网站根目录
	│   └── index.php
	├── readme.md
	├── vendor                - composer安装目录
	│   ├── autoload.php
	│   ├── composer
	│   ├── container-interop
	│   ├── doctrine
	│   ├── illuminate
	│   ├── leeoniya
	│   ├── nesbot
	│   ├── nikic
	│   ├── paragonie
	│   ├── pimple
	│   ├── psr
	│   ├── slim
	│   ├── symfony
	│   ├── tracy
	│   ├── twig
	│   └── zf1
	└── views                 - 视图目录
	    ├── cache             - 视图缓存
	    └── views             - 视图文件

## 安装项目

`composer create-project assad2008/yeeslim3 --stability=dev project-name`