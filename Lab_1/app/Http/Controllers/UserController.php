<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            "username"=>"required | max:10",
            'password'=>'required | min:5'
            
            ]);
       return $req->input();
    }

 
}
