<?php

namespace App\Http\Controllers\admin\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_info;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $where = [];
        $user = new User();
        $bo = $user->sel();
        if($request->has('username')){
            $username = $request->input('username');
            $bo->where('username','like',"%{$username}%");
            $where['username'] = $username;
        }
        $list = $bo->get();
        return view('admin.user.userlist', ['list' => $list, 'where'=>$where]);
    }

    public function create()
    {
        return view('stu.add');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('img')) {
            if ($request->file('img')->isValid()) {
                $file = $request->file('img');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('upload/',$picname);
                if($file->getError()>0){
                    return redirect('/stu/create');
                }
            }
        }
        $data = $request->except('_token');
        $data['img'] = $picname;
        $m = DB::table('user')->insertGetId($data);
        if($m > 0){
            return redirect('/stu');
        }else{
            return redirect('/stu/create');
        }
    }
    public function edit($id)
    {
        $link = DB::table('user')->where('id','=',$id)->first();
        return view('stu.update', ['link' => $link , 'title' => '修改信息']);
    }
    public function update($id,Request $request)
    {
        if ($request->hasFile('ximg')) {
            if ($request->file('ximg')->isValid()) {
                $file = $request->file('ximg');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('upload/',$picname);
                if($file->getError()>0){
                    return redirect('/stu/create');
                }
            }
        }
        $data = $request->only('name','sex','age','img');
        if(isset($picname)){
            if($data['img'] != 'default.jpg'){
                unlink("upload/{$data['img']}");
            }
            $data['img'] = $picname;
        }
        $row = DB::table('user')->where('id',$id)->update($data);
        if($row>0){
            return redirect('/stu');
        }else{
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $user = new User();
        if($user->del($id)){
            $user_info = new User_info();
            if($user_info->del($id)){
                return redirect('/admin/user/userlist');
            }
        }else{

        }


    }

    public function status($id, $sta)
    {
        $user =  User::find($id);
        $user->status = $sta == 1? 2 : 1;
        $user->save();
        return redirect('/admin/user/userlist');
    }
}
