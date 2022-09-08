<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;
use Hash;
class AddTeacher extends Controller
{
    public function index()
    {
     return view('frontend.add-teacher');
    }
    public function store(Request $request){
        $teachers=new Teachers;
        $teachers->firstname = $request['firstname'];
        $teachers->lastname = $request['lastname'];
        $teachers->email = $request['email'];
        $teachers->number = $request['number'];
        $teachers->section = $request['section'];
        $teachers->semester = $request['semester'];
        $teachers->career = $request['career'];
        $teachers->password = Hash::make($request -> password);
        $tec=$teachers->save(); 
        return redirect('/add_teacher/view');
    }
    public function view(){
        $newteacher= Teachers::all();
        $data= compact('newteacher');
        return view('frontend.add_teacher-view')->with($data);
    }
    public function delete($id)
{
    $newteacher= Teachers::find($id)->delete();
    return redirect()->back();
    
}
    }
    