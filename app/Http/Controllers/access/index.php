<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Redirect;
use Exception;
use App\Models\users as tblUsers;

class index extends Controller
{
    //
    public function login(Request $request){
        try{
            // check
            $password = trim($request->password);

            //
            $check = tblUsers::where([
                'email' =>  trim($request->email)
            ])->first();

            if( $check == null ){
                $data = [
                    'error' =>  [
                        'field' =>  'email',
                        'message'   =>  'Alamat email tidak ditemukan'
                    ],
                    'code'      =>  404
                ];


                return response()->json($data, 404);
            }

            //
            $checkPassword = (Hash::check($password, $check->password) ? 1 : 0);

            if($checkPassword == 0){
                $data = [
                    'error' =>  [
                        'field'         =>  'password',
                        'message'       =>  'Password salah!'
                    ],
                    'code'      =>  401
                ];

                return response()->json($data, 401);
            }


            $data = [
                'message'   =>  'success',
                'code'      =>  200
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            return $error->getMessage();
        }
    }
}
