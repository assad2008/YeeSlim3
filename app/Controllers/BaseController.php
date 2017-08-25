<?php

/**
 * @Filename: BaseController.php
 * @Author: assad
 * @Date:   2017-08-25 10:01:26
 * @Synopsis: 顶级控制器
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-25 10:02:44
 * @Email: rlk002@gmail.com
 */

namespace App\Controllers;

class BaseController
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }
}
