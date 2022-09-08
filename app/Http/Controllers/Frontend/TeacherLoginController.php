<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;

class TeacherLoginController extends Controller
{
    public function index()
    {
     return view('frontend.teacher_login');
    }
    public function teacherlogin(Request $request)
{
    print_r($request->all());
    $request->validate([
        'email'=>'required|email',
        'password'=>'required',
    ]);
    $teacher=Teachers::where('email','=',$request->email)->first();
    if($teacher)    
    {
        if (Teachers::where($request->password,$teacher->password)){
        $request -> Session()->put('email',$teacher->email);
        return redirect('teacher_dashboard');
    } else{
        return back()->with('fail','Password does not match');
    }
} else{
    return back()->with('fail','Email does not match');
}

}
}
