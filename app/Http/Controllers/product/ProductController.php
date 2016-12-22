<?php

namespace App\Http\Controllers\product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use db;

class ProductController extends Controller
{
    //
    public function index()
    {
//        $list =DB::table('product')->get();
        return view('product.product');
//        return 111;
    }
    public function aa(){

    }
}
