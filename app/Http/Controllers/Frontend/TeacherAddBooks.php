<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newbook;

class TeacherAddBooks extends Controller
{
    public function index()
    {
     return view('frontend.teacher_addbooks');
    }
    public function store(Request $request){
        
        $newbook=new Newbook;
        $newbook->subjectname = $request['subjectname'];
        $newbook->writersname = $request['writersname'];
        $newbook->bookname = $request['bookname'];
        $newbook->semester = $request['semester'];
        $book=$newbook->save(); 
        return redirect('/teacher_addbooks');
    }
}
