<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserinfoController extends Controller
{
    //后台userinfo首页 
    public function index()
    {
       
        
       return view("admin.userinfo.index");
    }
}
