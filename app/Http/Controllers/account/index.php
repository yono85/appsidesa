<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users as tblUsers;
use Cookie;
use Exception;

class index extends Controller
{

    //
    public function show($request){

        try{
            $getData = tblUsers::select(
                'id', 'name', 'email'
            )
            ->where([
                'email' =>  $request
            ])
            ->first();
    
            return $getData;
        }
        catch(Exception $error){
            return $error;
        }
    }
}
