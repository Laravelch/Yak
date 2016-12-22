<?php

namespace App\Http\Controllers\admin\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\User_info;
use App\Models\Doctor;
use App\Models\District;
use App\Models\Address;


class AjaxController extends Controller
{
    public function deluser(Request $request)
    {
        $id = $request->input('id');
        $user = new User();
        if($user->del($id)){
            $user_info = new User_info();
            if($user_info->del($id)){
                return  json_encode("删除用户成功!");
            }
        }else{
                return json_encode("删除用户失败!");
        }
    }
}
