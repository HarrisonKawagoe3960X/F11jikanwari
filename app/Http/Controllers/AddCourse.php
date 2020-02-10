<?php

namespace App\Http\Controllers;

use App\Course;
use App\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddCourse extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $courseinf=array();
        return view('addcourse');
    }

    public function addusercourse(Request $request){

        $usercourse = new UserCourse;
        $course = Course::find((int)$request->input('id'));
        $usercourse->courseid = (int)$request->input('id');
        $usercourse->userid = Auth::user()->id;
        $usercourse->timeid = $course->timeid;
        $usercourse->correct = 0;
        $usercourse->delay = 0;
        $usercourse->absent = 0;
        $usercourse->save();
        return redirect('/home');
    }

    public function detailusercourse(){
        return view('detailusercourse');
    }

    public function addattend(Request $request){
        $usercourse = UserCourse::find($request->input('id'));
        $usercourse->correct = $usercourse->correct+1;
        $usercourse->save();
        return redirect('/detailusercourse?id='.$request->input('id'));
    }

    public function adddelay(Request $request){
        $usercourse = UserCourse::find($request->input('id'));
        $usercourse->delay = $usercourse->delay+1;
        $usercourse->save();
        return redirect('/detailusercourse?id='.$request->input('id'));
    }

    public function addabsence(Request $request){
        $usercourse = UserCourse::find($request->input('id'));
        $usercourse->absent = $usercourse->absent+1;
        $usercourse->save();
        return redirect('/detailusercourse?id='.$request->input('id'));
    }

    public function deleteusercourse(Request $request){
        $usercourse = UserCourse::find($request->input('id'));
        $usercourse->delete();
        return redirect('/home');
    }


}
