<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2016-12-19
 * Time: 10:33
 */

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctor";

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


}