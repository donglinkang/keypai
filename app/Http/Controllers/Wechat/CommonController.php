<?php
namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Requests;

class CommonController extends WechatController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 微信入口
     */
    public function serve() {
//        $this->wechat->server->setMessageHanlder(function($message) {
//            return '你好！世界！';
//        });

        return $this->wechat->server->serve();
    }
}