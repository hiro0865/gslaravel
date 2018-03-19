<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data=[
            ['name'=>'yamada','mail'=>'yamada@co.jp'],
            ['name'=>'sato','mail'=>'sato@co.jp'],
            ['name'=>'suzuki','mail'=>'suzuki@co.jp']
            ];
        return view('hello.index',['data'=>$data]);
    }
}