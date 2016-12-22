<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    //查询当前用户所有地址
    public function addselect()
    {
        $id = session('homeuser');
        $row = $this->where('user_id', $id)->get();
        if($row){
            return $row;
        }else{
            return null;
        }
    }

    //查询当前要编辑地址
    public function addfirst($id)
    {
        $row = $this->where('id', $id)->first();
        if($row){
            return $row;
        }else{
            return null;
        }
    }

    //删除选中地址
    public function adddelete($id)
    {
        $row = $this->where('id', $id)->delete();
        if($row){
            return $row;
        }else{
            return null;
        }
    }
}
