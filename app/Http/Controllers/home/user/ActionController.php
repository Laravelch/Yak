<?php

namespace App\Http\Controllers\home\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\User_info;

class ActionController extends Controller
{
    //注册
    public function regsuc(Request $request)
    {
       $user = new User();
       $id =  $user->insertId($request);
        if ($id > 0) {
            $user_info = new User_info();
            $info_id =  $user_info->insertId($request, $id);
            if($info_id > 0){
                //注册成功，闪存给提示
                return redirect('/home/user/login');
            }

        }
    }
}