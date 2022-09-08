<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newresearchpapers;

class TeacherResearchPapers extends Controller
{
    public function index()
    {
     return view('frontend.teacher_researchpaper');
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
        return redirect('/teacher_researchpaper');
}
}
