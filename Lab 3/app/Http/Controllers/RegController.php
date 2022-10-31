<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class RegController extends Controller
{
    //
    function inputdata(Request $req)
    {
        $req->validate([
            "firstname"=>"required | min:1",
            "lastname"=>"required | min:1",
            "age"=>"required | min:18",
            "email"=>"required",
            'password'=>'required | min:5'
            ]);
            return $req->input();
        }

    function addData(Request $req)
    {
        $member = new student;
        $member->firstname=$req->firstname;
        $member->lastname=$req->lastname;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->gender=$req->gender;
        $member->password=$req->password;
        $member->save();
        return redirect('userlist');

    }


}
