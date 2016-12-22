<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    //验证登录
    public function checkLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $password = md5($password);
        $ob = $this->where([['username','=',$username],['password','=',$password]])->first();
        if($ob){
            return $ob;
        }else{
            return null;
        }
    }

    public function checkName($username)
    {
        $ob = $this->where('username','=',$username)->first();
        if($ob){
            return $ob;
        }else{
            return null;
        }
    }

    //查询用户所有信息
   public function sel()
   {
       $ob = $this->join('user_info', 'user.id', '=', 'user_info.user_id');
       if($ob){
           return $ob;
       }else{
           return null;
       }
   }

    //删除当前用户信息
    public function del($id)
    {
        $m = $this->where('id','=',$id)->delete();
        if($m){
            return $m;
        }else{
            return null;
        }
    }

    //修改密码
    public function updatepwd(Request $request, $id)
    {
        $password = md5($request->input('password'));
        $m = $this->where([['id','=',$id],['password','=',$password]])->first();
        if($m){
            $password = md5($request->input('xpassword'));
            $n = $this->where('id',$id)->update(['password' => $password]);
            if($n){
                return $n;
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
}
