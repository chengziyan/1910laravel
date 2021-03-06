<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info',function (){
   phpinfo();
});

Route::get('/test/hellow','TestController@hellow');
Route::get('/test/redis1','TestController@redis1');

//商品
Route::get('/goods/detail','Goods\GoodsController@detail');//商品详情


//Api
Route::post('/api/user/reg','Api\UserController@reg');//注册
Route::post('/api/user/login','Api\UserController@login');//登录
Route::get('/api/user/center','Api\UserController@center');//个人中心






