<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index($rid)
    {

        if(session()->has('homeuser')){
            $sid=session('homeuser');

        }else if(session()->has('docuser')){
            $sid=session('docuser')->id;
        }
        //$ob=new Message();

        //die;
        Message::where('sender_id',$rid)->where('receiver_id',$sid)->where('status',1)->update(["status"=>2]);
        //dd($aa->status);

        return view('chat.customer',["rid"=>$rid,"sid"=>$sid]);
    }
    //查询聊天内容并发送给Ajax请求
    public function send(Request $request)
    {

        if(session()->has('homeuser')){
            $sid=session('homeuser');
        }else if(session()->has('docuser')){
            $sid=session('docuser')->id;
        }
        $rid = $request->input('rid');
        $ob = new Message();
        Message::where('sender_id',$rid)->where('receiver_id',$sid)->where('status',1)->update(["status"=>2]);
        $m = $ob->selectms($rid,$sid);
        //$m=DB::table("message")->get();
        return $m->toJson();
    }
    //接受Ajax请求并存储聊天内容
    public function recive(Request $request)
    {
        $ob=new Message();
        if(empty($request->input('content'))){
            return false;
        }
        $ob->sender_id=$request->input('sender_id');
        $ob->receiver_id=$request->input('receiver_id');
        $ob->content=$request->input('content');
        $ob->save();

        return $ob->toJson();
    }
}
