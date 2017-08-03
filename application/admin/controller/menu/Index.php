<?php

namespace app\admin\controller\menu;

use app\admin\controller\Admin;

class Index extends Admin
{
    public function index()
    {
        $menu = file_get_contents('https://api.weixin.qq.com/cgi-bin/menu/get?access_token=SongRI2qgEdEkOP-BP0ow-5PNJhhZHct2kVKpfnC_uZm2uNBUKrVWBMHBSFXI77YUuuCJBiIe7K5bjtKicAX6m0FvMAGabPBXHHpzmFnXPQNOKcAGAEFB');
        dump(json_decode($menu, true));
    }
}