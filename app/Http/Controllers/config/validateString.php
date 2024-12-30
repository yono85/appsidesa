<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class validateString extends Controller
{
    // filter
    public function filterString($req){
        $filter = htmlspecialchars_decode(filter_var($req, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH), ENT_QUOTES);

        return $filter;
    }

    // validate all
    public function validateFilterString($request){

        if( $request->header('Content-Type') == 'application/json'){

            $data = json_decode($request->getContent(), true);
            foreach($data as $row => $value){
                $check = $this->filterString($data[$row]);
                $data[$row] = trim($check);
            }
    
            $data = json_encode($data, true);
            $data = json_decode($data);

            return $data;

        }else{ //form data

            $data = $request->all();
            foreach($data as $row => $value){
            
                $check = $this->filterString($data[$row]);
                $data[$row] = trim($check);
            }
    
            $data = json_encode($data, true);
            $data = json_decode($data);

            return $data;
        }
    }
}
