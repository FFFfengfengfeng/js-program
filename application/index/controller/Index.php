<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:35
 */

namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        $cookie = $_COOKIE;
        $this->assign($cookie);

        return $this -> fetch();
    }
}