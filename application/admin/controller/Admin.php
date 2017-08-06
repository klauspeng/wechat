<?php
namespace app\admin\controller;

use think\Controller;

/**
 * Class Admin 基类 初始化部分信息
 * @package app\admin\controller
 */
class Admin extends Controller
{
    // 初始化
    protected function _initialize()
    {
        // 自动获取access_token
        if (!cache('token')) {
            // 获取账号密码
            $appId  = cache('appid');
            $secret = cache('secret');
            // 获取token
            $token = file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appId}&secret={$secret}");
            $token = json_decode($token, true);
            // 保存
            cache('token', $token['access_token'], $token['expires_in']);
        }
    }
}
