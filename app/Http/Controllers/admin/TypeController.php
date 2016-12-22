<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Type;
use DB;

class TypeController extends Controller
{
    //
    public function index()
    {
        $type = new Type();
        $list = $type->typeGet();
        //dd($data);
        return view('admin.type.type',['list'=>$list]);
    }

    public function add(Request $request)
    {

        $type = new Type();
        $row = $type->typeStore($request);
        if($row>0){
            $list = $type->typeGet();
            return $list;
        }else{
            return null;
        }



    }

    public function doadd()
    {
       return view('admin.type.test');
    }

    public function del(Request $request)
    {
        $type = new Type();
        $id = $request->input('id');
        $row = $type->typeDestroy($id);
        if($row>0){
            return true;
        }else{
            return false;
        }
    }

}
