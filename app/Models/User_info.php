<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    protected $table = 'user_info';

    //删除当前用户信息
    public function del($id)
    {
        $data = $this->where('user_id','=',$id)->first();
        if($data['photo'] != 'user_default.jpg'){
            unlink("upload/user/{$data['photo']}");
        }
        $m = $this->where('user_id','=',$id)->delete();
        if($m){
            return $m;
        }else{
            return null;
        }
    }

    //修改当前用户信息
    public function userUpdate( Request $request ,$id)
    {
        if ($request->hasFile('xphoto')) {
            if ($request->file('xphoto')->isValid()) {
                $file = $request->file('xphoto');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('upload/user',$picname);
                if($file->getError()>0){
                    return null;
                }
            }
        }
        $data = $request->only('nickname','sex','age','photo');
        if(isset($picname)){
            if($data['photo'] != 'user_default.jpg'){
                unlink("upload/user/{$data['photo']}");
            }
            $data['photo'] = $picname;
        }
        $row =$this->where('user_id',$id)->update($data);
        if($row){
            return $row;
        }else{
            return null;
        }
    }
}
