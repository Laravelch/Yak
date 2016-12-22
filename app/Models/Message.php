<?php


    namespace App\Models;


    use Illuminate\Database\Eloquent\Model;


    class Message extends Model
    {
        protected $table = 'message';
		public function selectms($rid,$sid){
            $ob = $this->where([
                ['sender_id',$sid],
                ['receiver_id',$rid],
            ])->orwhere([
                ['sender_id',$rid],
                ['receiver_id',$sid],
            ])->get();
            return $ob;
        }
    }
