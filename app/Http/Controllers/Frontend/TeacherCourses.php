<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newcourse;
class TeacherCourses extends Controller
{
    public function index()
    {
     return view('frontend.teacher_courses');
    }
    public function store(Request $request){
        
        $newcourse=new Newcourse;
        $newcourse->coursename = $request['coursename'];
        $newcourse->topic = $request['topic'];
        $newcourse->institutionname = $request['institutionname'];
        $newcourse->viewcourse = $request['viewcourse'];
        $newcourse->career = $request['career'];
        $course=$newcourse->save(); 
        return redirect('/teacher_courses');
}
}
