<?php
namespace app\admin\controller;

class Index extends Admin
{
    public function index()
    {
        $this->assign([
            'title'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);
        return view();
    }
}
