<?php

namespace App\Http\Controllers\home\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_info;
use App\Models\Address;

class UserController extends Controller
{
    //个人中心主页
    public function index()
    {
        $id = session('homeuser');
        $user = new User();
        $ob = $user->sel()->where('user.id',$id)->first();

        return view('home.user.index',['list' => $ob]);
    }

    //遍历地址
    public function dizhi()
    {
        $address = new Address();
        $row = $address->addselect();
        return view('home.user.dizhi',['list' => $row]);
    }

    //遍历地址
    public function updadizhi($id)
    {
        $address = new Address();
        $row = $address->addfirst($id);
        return view('home.user.updadizhi',['list' => $row]);
    }

    //删除地址
    public function deldizhi($id)
    {
        $address = new Address();
        $address->adddelete($id);
        return redirect('/home/user/dizhi');
    }

    //跳转至添加地址页面
    public function adddizhi()
    {
        return view('home.user.adddizhi');
    }
    public function pwd()
    {
        return view('home.user.pwd');
    }

    //遍历个人信息
    public function userinfo()
    {

        $id = session('homeuser');
        $user = new User();
        $ob = $user->sel()->where('user.id',$id)->first();
        return view('home.user.userinfo',['list' => $ob]);
    }

    //修改个人信息
    public function userupdate( Request $request, $id)
    {
        $user_info = new User_info();
        $row = $user_info->userUpdate($request, $id);
        if($row>0){
            return redirect('/home/user/userinfo');
        }else{
            return redirect()->back();
        }

    }
    public function register()
    {

        return view('home.user.register');
    }
    public function login()
    {

        return view('home.user.login');
    }
}
