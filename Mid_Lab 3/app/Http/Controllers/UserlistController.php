<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class UserlistController extends Controller
{
    // 
      function index()
    {
        $data =  student::all();
        return view('userlist',['student'=>$data]);
    }

    function delete($id)
    {
        $data =  student::find($id);
        $data->delete();
        return redirect('userlist');
        //return view('userlist',['student'=>$data]);
    }

    function showdata($id)
    {
        $data=  student::find($id);
       return view('edit',['data'=>$data]);
    }
    
    function update(Request $req)
    {
        $data=  student::find($req->id );
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->gender=$req->gender;
        $data->password=$req->password;
        $data->save();
        return redirect('userlist');
    }

}
