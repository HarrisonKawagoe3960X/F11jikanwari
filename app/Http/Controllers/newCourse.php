<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newCourse extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $courseinf=array();
        return view('newcourse');
    }
    public function edit(){

        $courseinf=array();
        return view('editcourse');
    }
}
