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

        echo file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx8e987be21ba25e52&secret=29dd965e359cf64d9c2819cce831d979');
        exit();
        return view();
    }
}
