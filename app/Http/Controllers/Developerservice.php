<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Developerservice extends Controller
{
    public function base64_encode(){
        
        $data['title'] = 'Stackoftools | Base64 Encode';
        return view('services/developer/base64_encode', $data);
    }
    public function base64_decode(){
        
        $data['title'] = 'Stackoftools | Base64 Decode';
        return view('services/developer/base64_decode', $data);
    }
    public function encodebase64(Request $request)
    {
        $input = trim($request->input('input'));

        $output = base64_encode($input);
       
        $response = [
           'status' => 0,
           'message' => 'succcess',
           'output' => $output
        ];

        return response()->json($response);
    }
    public function decodebase64(Request $request)
    {
        $input = trim($request->input('input'));

        $output = base64_decode($input);
       
        $response = [
           'status' => 0,
           'message' => 'succcess',
           'output' => $output
        ];

        return response()->json($response);
    }
}
