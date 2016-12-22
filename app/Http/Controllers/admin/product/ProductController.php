<?php

namespace App\Http\Controllers\admin\product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
        return 111111111;
    }

    public function add()
    {
        return view('admin.product.productAdd');
    }
}
