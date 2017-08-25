<?php

/**
 * @Filename: IndexController.php
 * @Author: assad
 * @Date:   2017-08-25 10:03:47
 * @Synopsis:
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-25 10:58:10
 * @Email: rlk002@gmail.com
 */

namespace App\Controllers;

class IndexController extends BaseController
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'index.html', ["helo" => 'hello world']);
    }
}
