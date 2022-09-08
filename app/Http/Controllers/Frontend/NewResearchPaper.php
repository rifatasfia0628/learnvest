<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newresearchpapers;

class NewResearchPaper extends Controller
{
    public function index()
    {
     return view('frontend.new_research_papers');
    }
    public function store(Request $request){
        
        $newresearchpapers=new Newresearchpapers;
        $newresearchpapers->professorsname= $request['professorsname'];
        $newresearchpapers->topic = $request['topic'];
        $newresearchpapers->institutionname = $request['institutionname'];
        $newresearchpapers->headline = $request['headline'];
        $newresearchpapers->publicationname = $request['publicationname'];
        $newresearchpapers->contactprofessor = $request['contactprofessor'];
        $newresearchpapers->viewpaper = $request['viewpaper'];
        $newresearchpapers->career = $request['career'];
        $assistance=$newresearchpapers->save(); 
        return redirect('/new_research_papers/view');
}
public function view(){
    $newresearchpaper= Newresearchpapers::all();
    $data= compact('newresearchpaper');
    return view('frontend.all_research_paper')->with($data);
}
public function delete($id)
{
    $newresearchpapers= Newresearchpapers::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newresearchpaper= Newresearchpapers::find($id);
  $newresearchpaper->status='approve';
  $newresearchpaper->save();
    return redirect()->back();

}
}
