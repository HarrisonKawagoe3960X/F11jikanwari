<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCourse extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newcourse(Request $request)
    {
        $course = new Course;
        $course->timeid = (int)$request->input('timeid');
        $course->userid= Auth::user()->id;
        $course->coursename= $request->input('coursename');
        $course->place= $request->input('place');
        $course->teachername= $request->input('teachername');
        $course->type = (int)$request->input('type');
        $course->save();
        return redirect('/home');
    }

    public function updatecourse(Request $request)
    {
        $course = \App\Course::find($request->input('id'));
        $course->userid= Auth::user()->id;
        $course->coursename= $request->input('coursename');
        $course->place= $request->input('place');
        $course->teachername= $request->input('teachername');
        $course->type = (int)$request->input('type');
        $course->save();
        return redirect('/home');
    }

}
