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

    //鲜花
    public function xh(){
        $data=request()->input();
        // increment('votes', 5);
        $link=[
            'f_name'=>$data['name'],
            'f_jf'=>$data['jf']
        ];
        $res=jf::where('f_name','=',$data['name'])->first();
        if($res){
            jf::where('f_name','=',$data['name'])->increment('f_jf', $data['jf']);
        }else{
            jf::where('f_name','=',$data['name'])->insert($link);
        }
    }
    //跑车
    public function pc(){
        $data=request()->input();
        // increment('votes', 5);
        $link=[
            'f_name'=>$data['name'],
            'f_jf'=>$data['jf']
        ];
        $res=jf::where('f_name','=',$data['name'])->first();
        if($res){
            jf::where('f_name','=',$data['name'])->increment('f_jf', $data['jf']);
        }else{
            jf::where('f_name','=',$data['name'])->insert($link);
        }
    }
    //火箭
    public function hj(){
        $data=request()->input();
        // increment('votes', 5);
        $link=[
            'f_name'=>$data['name'],
            'f_jf'=>$data['jf']
        ];
        $res=jf::where('f_name','=',$data['name'])->first();
        if($res){
            jf::where('f_name','=',$data['name'])->increment('f_jf', $data['jf']);
        }else{
            jf::where('f_name','=',$data['name'])->insert($link);
        }
    }
    //砖石
    public function zs(){
        $data=request()->input();
        // increment('votes', 5);
        $link=[
            'f_name'=>$data['name'],
            'f_jf'=>$data['jf']
        ];
        $res=jf::where('f_name','=',$data['name'])->first();
        if($res){
            jf::where('f_name','=',$data['name'])->increment('f_jf', $data['jf']);
        }else{
            jf::where('f_name','=',$data['name'])->insert($link);
        }
    }
    //飞机
    public function fj(){
        $data=request()->input();
        // increment('votes', 5);
        $link=[
            'f_name'=>$data['name'],
            'f_jf'=>$data['jf']
        ];
        $res=jf::where('f_name','=',$data['name'])->first();
        if($res){
            jf::where('f_name','=',$data['name'])->increment('f_jf', $data['jf']);
        }else{
            jf::where('f_name','=',$data['name'])->insert($link);
        }
    }

    //fensi
    public function fensi(){
        $data=jf::orderBy('f_jf','desc')->get();
        return view('index/fensi',['data'=>$data]);
    }

    public function dajia(){
        return view('index/dajia');
    }
    public function tan(){
        return view('index/tanmu');
    }
}
