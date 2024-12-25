<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function main(Request $request){
        $data = [];

        return view('dashboard.main')->with($data);
    }
}
