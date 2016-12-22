<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2016-12-19
 * Time: 10:29
 */

namespace App\Http\Controllers\chat;


use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\User_info;

class DoctorController extends Controller
{
    public function index()
    {
       $ob=new Doctor();
        $list= $ob->get();
        return view("chat.doctor",["list"=>$list]);
    }

    public function login()
    {
        return view("chat.login");
    }
       public function asklist()
    {
        $ob=new Message();
        $rid=session()->get('docuser')->id;
        $list=$ob->select('sender_id')->where('receiver_id',$rid) ->orderBy('created_at', 'desc')->distinct()->get();
        $listu=[];
        foreach ($list as $k=>$v) {
            $listu2=$ob->select('message.sender_id','message.receiver_id','message.content','message.created_at','user_info.nickname','user_info.photo')
                ->join('user_info', 'message.sender_id', '=', 'user_info.user_id')
                ->where('message.sender_id',$v->sender_id)
                ->where('message.receiver_id',$rid)
                ->orderBy('message.created_at', 'desc');
            $listu[]=$listu2->first();
        }
        return view("chat.asklist",['list'=>$listu]);
    }

    public function askinfo()
    {
        $ob=new Message();
        $obu=new User_info();
        $rid=session()->get('docuser')->id;
        $list=$ob->select('sender_id')->where('receiver_id',$rid)->orderBy('created_at', 'desc')->distinct()->get();

        $arr=[];
        foreach ($list as $k=>$v) {

            $obb=$ob->select('message.sender_id','message.receiver_id','message.content','message.created_at','user_info.nickname','user_info.photo')
                ->join('user_info', 'message.sender_id', '=', 'user_info.user_id')
                ->where('message.sender_id',$v->sender_id)
                ->where('message.receiver_id',$rid)
                ->orderBy('message.created_at', 'desc');
            $listu1=$ob->select('message.sender_id','message.receiver_id','message.content','message.created_at','user_info.nickname','user_info.photo')
                ->join('user_info', 'message.sender_id', '=', 'user_info.user_id')
                ->where('message.sender_id',$v->sender_id)
                ->where('message.receiver_id',$rid)
                ->where("message.status",1)
                ->orderBy('message.created_at', 'desc');
            if($count=$listu1->get()->count()){

            }else{
                $count=0;
            }
            $obb2=$obb->first();
            $time=strtotime($obb2->created_at);
            $time=$time."000";
            $arr[]=["sender_id"=>$v->sender_id,"count"=>$count,"nickname"=>$obb2->nickname,"time"=>$time,"content"=>$obb2->content,"photo"=>$obb2->photo];
            $str=json_encode($arr);
        }

        return $str;
    }


}