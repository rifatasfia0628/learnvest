<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newguide;
class NewGuideteachers extends Controller
{
    public function index()
    {
     return view('frontend.new_guideteacher');
    }
    public function store(Request $request){
        $newguide=new Newguide;
        $newguide->professorsname = $request['professorsname'];
        $newguide->section = $request['section'];
        $newguide->semester = $request['semester'];
        $course=$newguide->save(); 
        return redirect('/new_guideteacher/view');
    }
    public function view(){
        $newguide= Newguide::all();
        $data= compact('newguide');
        return view('frontend.new_guideteacher-view')->with($data);
    }
    public function delete($id)
{
    $newguide= Newguide::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newguide= Newguide::find($id);
    $newguide->status='approve';
    $newguide->save();
    return redirect()->back();

}
    }
