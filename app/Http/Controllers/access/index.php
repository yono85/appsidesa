<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cookie;
use App\Models\users as tblUsers;

class index extends Controller
{
    //
    public function login(Request $request){
        try{
            // check
            $password = trim($request->password);
            $email = trim($request->email);

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


            // create cookie
            Cookie::queue('email', $email, 120);

            $data = [
                'message'   =>  'success',
                'code'      =>  200,
                'data'      =>  [
                    'redirect'  =>  '/dashboard'
                ]
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            $data = [
                'message'       =>  $error->getMessage(),
                'code'      =>  500
            ];

            return response()->json($data, 500);
        }
    }

    public function logout(Request $request){
        try{
            // dd("logout");
            \Cookie::queue(\Cookie::forget('email'));
            return redirect('/login');
        }
        catch(Exception $error){
            return redirect('/login');
        }
    }
    
}
