<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyWeChat;

use App\Http\Requests;
use Symfony\Component\Console\Application;

class WechatController extends Controller
{
    /**
     * 服务
     */
    protected $server;

    public function __construct()
    {
        $this->wechat = app('wechat');
    }
}
