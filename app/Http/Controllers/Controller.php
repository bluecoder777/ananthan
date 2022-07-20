<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function index() 
    {
        dd("hello");
    }
    function abcd(Request $request) 
    {
        $b=$request->qwerty;
        move_uploaded_file($b, "C:\Users\abino_c2admvs\Desktop\ServerJefrin\qw.jpg");
        exec('python C:\Users\abino_c2admvs\Desktop\ServerJefrin\mlscript.py',$a);
        $c=json_encode($a);
        return $b;
    }
    
    
}
