<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;

class IndexController extends Controller
{
    //商品用户注册
    public function reg(){
        return view('user.reg');
    }
    public function regdo(){

    }
    //商品用户登录
    public function log(){

    }
}
