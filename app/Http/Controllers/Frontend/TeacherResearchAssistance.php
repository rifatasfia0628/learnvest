<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newassistance;

class TeacherResearchAssistance extends Controller
{
    public function index()
    {
     return view('frontend.teacher_researchassistance');
    }
    public function store(Request $request){
        
        $newassistance=new Newassistance;
        $newassistance->professorsname = $request['professorsname'];
        $newassistance->researchtopic = $request['researchtopic'];
        $newassistance->researchboundaries = $request['researchboundaries'];
        $newassistance->contactprofessor = $request['contactprofessor'];
        $newassistance->career = $request['career'];
        $assistance=$newassistance->save(); 
        return redirect('/teacher_researchassistance');
}
}
