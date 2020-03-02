<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // 页面
    public function index()
    {
        // dd(213);
        return view('index/index');
    }
}
