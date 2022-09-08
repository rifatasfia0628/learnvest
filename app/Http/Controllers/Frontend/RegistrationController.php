<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Hash;


class RegistrationController extends Controller
{
    public function index()
    {
     return view('frontend.registration');
    }
    public function index1()
    {
     return view('frontend.studentupdate');
    }
    public function register(Request $request)
    {
   $request->validate(
         [ 
            'firstname'=>'required',
            'lastname'=>'required',
            'roll'=>'required',
            'registration'=>'required',
            'number'=>'required',
            'email'=>'required|email',
            'semester'=>'required',
            'section'=>'required',
            'career'=>'required',
         ]
         );
    }
    public function store(Request $request)
    {
        $register = new Register;
        $register->firstname = $request['firstname'];
        $register->lastname = $request['lastname'];
        $register->email = $request['email'];
        $register->roll = $request['roll'];
        $register->registration = $request['registration'];
        $register->number = $request['number'];
        $register->section = $request['section'];
        $register->semester = $request['semester'];
        $register->career = $request['career'];
        $register->password = Hash::make($request -> password);
        $res=$register->save(); 
        if ($res){
            return back() ->with('success','You have registered successfully');
        }
        else {
            return back() -> with ('fail','Something wrong! Try again Later');
        }
     
        return redirect('/new_guideteacher/view');
    } 
 
    public function view(){
        $newuser= Register::all();
        $data= compact('newuser');
        return view('frontend.registration-view')->with($data);
    }
    public function delete($id)
{
    $newusers=  Register::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newusers=  Register::find($id);
     $newusers->status='approve';
     $newusers->save();
    return redirect()->back();

}
    }
    
