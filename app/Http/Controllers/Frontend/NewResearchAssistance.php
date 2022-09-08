<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newassistance;
class NewResearchAssistance extends Controller
{
    public function index()
    {
     return view('frontend.new_research_assistance');
    }
    public function store(Request $request){
        
        $newassistance=new Newassistance;
        $newassistance->professorsname = $request['professorsname'];
        $newassistance->researchtopic = $request['researchtopic'];
        $newassistance->researchboundaries = $request['researchboundaries'];
        $newassistance->contactprofessor = $request['contactprofessor'];
        $newassistance->career = $request['career'];
        $assistance=$newassistance->save(); 
        return redirect('/new_research_assistance/view');
}
public function view(){
    $newresearchassistance= Newassistance::all();
    $data= compact('newresearchassistance');
    return view('frontend.new_research_assistance-view')->with($data);
}
public function delete($id)
{
    $newresearchassistance= Newassistance::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newresearchassistance= Newassistance::find($id);
    $newresearchassistance->status='approve';
    $newresearchassistance->save();
    return redirect()->back();

}
}
