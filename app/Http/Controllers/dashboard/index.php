<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\account\index as getAccount;
use Cookie;

class index extends Controller
{
    //
    public function main(Request $request){
        //
        $getDataAcount = new getAccount;

        // 
        $data = [
            'ACCOUNT'   =>  $getDataAcount->show(Cookie::get('email')),
            'TITLE' =>  'Selamat datang di ' . env("APP_NAME")
        ];

        return view('dashboard.main')->with($data);
    }
}
