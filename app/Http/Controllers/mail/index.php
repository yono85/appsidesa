<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\tb_pengaduans as tblPengaduans;
use App\Http\Controllers\config\validateString as validateStrings;

class index extends Controller
{
    //
    public function create(Request $request){
        try{

            // config
            $validateStrings = new validateStrings;
            
            // filter
            $request = $validateStrings->validateFilterString($request);

            // create
            $create                 =   new tblPengaduans;
            $create->name           =   trim($request->name);
            $create->phone          =   trim($request->phone);
            $create->nik            =   trim($request->nik);
            $create->type           =    trim($request->type);
            $create->message        =   trim($request->message);
            $create->file           =   ''; //trim($request->file);
            $create->save();
            
            $data = [
                'code'  =>  200,
                'message'   =>  'Terimkasih, Pengaduan Anda berhasil dikirim'
            ];

            return response()->json($data, 200);
        }
        catch(Exception $error){
            return response()->json([
                'code'      =>  500,
                'message'   =>  $error->getMessage()
            ]);
        }
    }
}
