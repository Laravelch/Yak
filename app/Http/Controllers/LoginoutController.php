<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2016-12-20
 * Time: 10:41
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginoutController extends Controller
{
    public function homeLoginout(Request $request)
    {
        $request->session()->forget('homeuser');
        $request->session()->forget('docuser');
        return back();
    }
}