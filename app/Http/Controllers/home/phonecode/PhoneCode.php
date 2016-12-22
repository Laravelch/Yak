<?php
namespace App\Http\Controllers\home\phonecode;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2016-12-22
 * Time: 10:26
 */
class PhoneCode extends Controller
{
    public function sendCode()
    {
        //随机验证码

        $str = "1234567890";
        $_len = strlen($str) - 1;
        for($i = 0;$i<6; $i++){
            $code .= $str[mt_rand(0,$_len)];
        }
    }
    public function checkCode()
    {

    }
}