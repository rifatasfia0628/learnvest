<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newcourse;

class NewCourses extends Controller
{
    public function index()
    {
     return view('frontend.new_courses');
    }
    public function store(Request $request){
        
        $newcourse=new Newcourse;
        $newcourse->coursename = $request['coursename'];
        $newcourse->topic = $request['topic'];
        $newcourse->institutionname = $request['institutionname'];
        $newcourse->viewcourse = $request['viewcourse'];
        $newcourse->career = $request['career'];
        $course=$newcourse->save(); 
        return redirect('/new_courses/view');
}
public function view(){
    $newcourses= Newcourse::all();
    $data= compact('newcourses');
    return view('frontend.new_course-view')->with($data);
}
public function delete($id)
{
    $newcourses= Newcourse::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newcourses= Newcourse::find($id);
   $newcourses->status='approve';
   $newcourses->save();
    return redirect()->back();

}
}
