<?php
namespace app\admin\controller;

class Index extends Admin
{
    public function index()
    {
        $this->assign([
            'title'  => 'pthlp订阅号管理平台',
            'email' => 'thinkphp@qq.com'
        ]);
        return view();
    }
}
