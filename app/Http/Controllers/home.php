<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $courseinf=array();
        return view('index');
    }
}
