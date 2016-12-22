<?php

namespace App\Http\Controllers\home\user;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\User_info;
use App\Models\Doctor;
use App\Models\District;
use App\Models\Address;

class AjaxController extends Controller
{
    //用户登录验证
    public function ylogin(Request $request){
        $user = new User();
        $ob = $user->checkLogin($request);
        if($ob){
            session(['homeuser' => $ob->id]);
            return  json_encode(true);
        }else{
            return json_encode("账号不存在或密码错误!");
        }

    }

    //医师登录验证
    public function doclogin(Request $request){
        $doctor = new Doctor();
        $ob = $doctor->checkLogin($request);
        if($ob){
            session(['docuser'=> $ob]);
            return  json_encode(true);
        }else{
            return json_encode("账号不存在或密码错误!");
        }
    }

    //判断账号是否注册
    public function resgName(Request $request){
        $name = $request->input('name');
        $val = $request->input('value');
        if($name == 'username') $name = "手机号";
        if($name == 'password') $name = "密码";
        switch($name){
            case '手机号':
                $user = new User();
                $m = $user->checkName($val);
                if($m){
                    $list = $name."已经注册！";
                    return json_encode($list);
                }
                break;
        }
        return json_encode(1);
    }

    //注册
    public function regsuc(Request $request)
    {

        $user = new User();
        $user->username = $request->input('username');
        $user->password = md5($request->input('password'));
        $user->save();
        if ($user->id > 0) {
            $user_info = new User_info();
            $user_info->user_id = $user->id;
            $user_info->phone = $request->input('username');
            $user_info->nickname = $request->input('username');
            $info_id =  $user_info->save();
            if($info_id){
                session(['homeuser' => $user->id]);

                return json_encode('账号注册成功!');
            }else{
                return json_encode("账号存在问题！");
            }
        }else{
            return json_encode("账号存在问题！");
        }
    }

    //修改密码
    public function pwd(Request $request)
    {
        $id = session('homeuser');
        $user = new User();
        $ob = $user->updatepwd($request, $id);
        if($ob){
            return json_encode("密码修改成功!");
        }else{
            return json_encode("密码不正确！");
        }
    }

    //获取省份
    public function docity(Request $request)
    {
        $district = new District();
        $list = $district->dissel($request);
        return json_encode($list);
    }

    //获取城市
    public function doxian(Request $request)
    {
        $district = new District();
        $list = $district->dissel($request);
        return json_encode($list);
    }

    //添加用户送货地址
    public function adddizhi(Request $request)
    {
        $address = new Address();
        $address->user_id = session('homeuser');
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->detail = $request->input('detail');
        $address->city = $request->input('dizhi');
        $bo = $address->save();
        if($bo){
            return json_encode('地址添加成功!');
        }else{
            return json_encode('地址添加失败!');
        }
    }

    public function changesta()
    {
        $user_id = session('homeuser');
        Address::where('user_id', $user_id)->where('status','2')->update(['status' => 1]);
    }
    //编辑地址
    public function changedizhi(Request $request)
    {
        $this->changesta();
        $id = $request->input('id');
        $address =  Address::find($id);
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->detail = $request->input('detail');
        $address->city = $request->input('dizhi');
        $address->status = 2;
        $bo = $address->save();
        if($bo){
            return json_encode('地址编辑成功!');
        }else{
            return json_encode('地址添加失败!');
        }
    }

    //修改默认地址
    public function defdizhi(Request $request)
    {
        $id = $request->input('id');
        $this->changesta();
        $address =  Address::find($id);
        $address->status = 2;
        $bo = $address->save();
        if($bo){
            return json_encode(true);
        }else{
            return json_encode(false);
        }
    }
}
