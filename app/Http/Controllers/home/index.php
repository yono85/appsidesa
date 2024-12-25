<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function main(Request $request){
        $data = [];
        return view('home.main')->with($data);
    }

    public function login(Request $request){
        $data = [];
        return view('home.login')->with($data);
    }

    public function mail(Request $request){
        $data = [];
        return view('home.mail')->with($data);
    }
}
