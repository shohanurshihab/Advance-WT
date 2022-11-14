<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routecontroller extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('home')->with('message', $message);
    }

    public function products(){
   
        $names=array("School Management System", "Ticket management system", "Library management system","Employee management system");
        return view('service')
        ->with('names', $names);
    }

    public function team(){
   
        $names=array("Takib", "Arafat", "Fahim","Shihab");
        return view('team')
        ->with('names', $names);
    }
}
