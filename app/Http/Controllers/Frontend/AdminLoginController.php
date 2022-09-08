<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
class AdminLoginController extends Controller
{
 
    public function index()
    {
     return view('frontend.admin_login');
    }
    public function adminlogin(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required',
    ]);
    $admin=Admin::where('email','=',$request->email)->first();
    if($admin)    
    {
        if (Admin::where($request->password,$admin->password)){
        $request -> Session()->put('email',$admin->email);
        return redirect('admin_dashboard');
    } else{
        return back()->with('fail','Password does not match');
    }
} else{
    return back()->with('fail','Email does not match');
}

}
public function logout()
{
    if (Session::has('email')){
        Session::pull('email');
        return redirect ('admin_login');

    }
}
}

        
       

