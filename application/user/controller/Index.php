<?php
namespace app\user\controller;

use think\Controller;

class Index extends Controller
{
    public function index($action)
    {
        // 模板变量赋值
        $this->assign('name','ThinkPHP');


        return $this->fetch();
    }
    public function test()
    {
        return $this->fetch();
    }
}