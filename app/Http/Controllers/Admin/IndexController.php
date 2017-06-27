<?php
//后台首页控制器
namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    //加载后台网站首页
    public function index()
    {
        return view("admin.index");
    }

}
