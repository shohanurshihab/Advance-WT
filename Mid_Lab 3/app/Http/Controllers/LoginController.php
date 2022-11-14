<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            "username"=>"required | max:10",
            'password'=>'required | min:5'
            
            ]);
       return $req->input();
    }

    function login($id)
    {
        $data =  student::find($id);
        
        return redirect('userlist');
    }



}
