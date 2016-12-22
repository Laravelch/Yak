<?php

namespace App\Http\Controllers\admin\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.user.adminlist');
    }
}
