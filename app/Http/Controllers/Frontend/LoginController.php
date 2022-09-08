<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
     return view('frontend.login');
    }
    public function login(Request $request)
    {
        print_r($request->all());
        $request->validate([
            'email'=>'required|email',
                'password'=>'required',
        ]);
            
            $user=Register::where('email','=',$request->email)->first();
            if($user){
                if (Hash::check($request->password,$user->password)){
                    $request -> Session()->put('email',$user->email);
                    return redirect('dashboard');
                } else{
                    return back()->with('fail','Password does not match');
                }
            } else{
                return back()->with('fail','Email does not match');
            }
    }

}

