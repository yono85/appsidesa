<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function main(Request $request){
        $data = [
            'TITLE' =>  'Selamat datang di ' . env("APP_NAME")
        ];
        return view('home.main')->with($data);
    }

    public function login(Request $request){
        $data = [
            'TITLE' =>  'Login | ' . env("APP_NAME")
        ];
        return view('home.login')->with($data);
    }

    public function mail(Request $request){
        $data = [
            'TITLE' =>  'Kotak Surat | ' . env("APP_NAME")
        ];
        return view('home.mail')->with($data);
    }
}
