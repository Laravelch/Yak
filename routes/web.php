<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//聊天路由
Route::group(['prefix' => '/chat','middleware' => 'checkChat'],function () {
    Route::get('send/{id}', 'chat\ChatController@index');
    Route::post('send/echo', 'chat\ChatController@send');
    Route::post('receive', 'chat\ChatController@recive');
    Route::get('doctor', 'chat\DoctorController@index');
});
Route::get('/home/doctor/login','chat\DoctorController@login');
//药师控制台
Route::group(['prefix' => '/doctor','middleware' => 'checkDoctor'],function () {
    Route::get('asklist', 'chat\DoctorController@asklist');
    Route::post('askinfo', 'chat\DoctorController@askinfo');

});

//快递员控制台
//Route::group(['prefix' => '/doctor','middleware' => 'checkUser'],function () {
//    Route::get('asklist', 'chat\DoctorController@asklist');
//});



//退出路由
Route::group(['prefix' => '/loginout'],function () {
    Route::get('home', 'LoginoutController@homeLoginout');
});
//后台路由群组
Route::group(['prefix' => '/admin','middleware' => 'checkAdmin'],function(){
    //后台主页
    Route::get('/','admin\AdminController@index');
    //后台商品类型板块
     Route::get('/type','admin\TypeController@index');
    Route::get('/type/add','admin\TypeController@doadd');
    Route::post('/type/add','admin\TypeController@add');
    Route::post('/type/del','admin\TypeController@del');
    //后台用户管理
    Route::get('/user/adminlist','admin\user\AdminController@index');
    Route::get('/user/doctorlist','admin\user\DoctorController@index');

    //用户状态
    Route::get('/user/userlist/status/{id}/{sta}','admin\user\UserController@status');
    //普通用户管理
    Route::resource('/user/userlist', 'admin\user\UserController');

});

//后台Ajax的验证都在里面
Route::group(['prefix' => '/admin/user/ajax'],function(){
    Route::post('/deluser','admin\user\AjaxController@deluser');


    Route::post('/dizhi/city','home\user\AjaxController@docity');
    Route::post('/dizhi/xian','home\user\AjaxController@doxian');
    Route::post('/adddizhi','home\user\AjaxController@adddizhi');
    Route::post('/changedizhi','home\user\AjaxController@changedizhi');
    Route::post('/defdizhi','home\user\AjaxController@defdizhi');
});


//前台的登陆验证
Route::get('/home/user/login','home\user\UserController@login');
Route::get('/home/user/register','home\user\UserController@register');
//前台首页
Route::get('/home','home\IndexController@index');
//前台路由群组


//购物车的路由群组
//Route::group(['prefix'=>'/home/cart'],'middleware'=>'checkUser',function(){
//    Route::get('/','');
//});


//个人中心首页
Route::get('/home/user','home\user\UserController@index');
//个人中心路由群组
Route::group(['prefix' => '/home/user','middleware' => 'checkUser'],function(){
    //前台的路由个人中心
    //地址
    Route::get('/dizhi','home\user\UserController@dizhi');
    Route::get('/adddizhi','home\user\UserController@adddizhi');
    Route::get('/updadizhi/{id}','home\user\UserController@updadizhi');
    Route::get('/deldizhi/{id}','home\user\UserController@deldizhi');
    //用户个人信息
    Route::get('/userinfo','home\user\UserController@userinfo');
    Route::post('/userupdate/{id}','home\user\UserController@userupdate');
    Route::get('/pwd','home\user\UserController@pwd');
});

//登录注册的Ajax的验证都在里面
Route::post('/home/user/ajax/login','home\user\AjaxController@ylogin');
Route::post('/home/user/ajax/doclogin','home\user\AjaxController@doclogin');
Route::post('/home/user/ajax/resgName','home\user\AjaxController@resgName');
Route::post('/home/user/ajax/regsuc','home\user\AjaxController@regsuc');

//前台Ajax的验证都在里面
Route::group(['prefix' => '/home/user/ajax','middleware' => 'checkUser'],function(){
    Route::post('/pwd','home\user\AjaxController@pwd');
    Route::post('/dizhi/city','home\user\AjaxController@docity');
    Route::post('/dizhi/xian','home\user\AjaxController@doxian');
    Route::post('/adddizhi','home\user\AjaxController@adddizhi');
    Route::post('/changedizhi','home\user\AjaxController@changedizhi');
    Route::post('/defdizhi','home\user\AjaxController@defdizhi');
});

//商品路由
Route::group(['prefix'=>'/product'],function(){
    Route::get('/','product\ProductController@index');
});