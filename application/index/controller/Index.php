<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:35
 */

namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this -> fetch();
    }
}