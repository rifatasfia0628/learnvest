<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FourthSemesterAController extends Controller
{
    
    public function index()
    {
     return view('frontend.4th_semester-A');
    }
}
