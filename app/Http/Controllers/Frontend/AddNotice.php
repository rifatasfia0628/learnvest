<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class AddNotice extends Controller
{
    public function index()
    {
     return view('frontend.add_notice');
    }
   
    public function upload(Request $request)
{
   
    $notice=new Notice;
    $notice->notice=$request['notice'];
    $notice->description=$request['description'];
    $notice->save();
    return redirect('/add_notice/view');

}
public function view(){
    $notices= Notice::all();
    $data= compact('notices');
    return view('frontend.add_notice-view')->with($data);
}
public function delete($id)
{
    $notices= Notice::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $notices= Notice::find($id);
     $notices->status='approve';
     $notices->save();
    return redirect()->back();

}
}
