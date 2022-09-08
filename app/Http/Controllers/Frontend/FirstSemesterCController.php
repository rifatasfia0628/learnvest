<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstSemesterCController extends Controller
{
    public function index()
    {
     return view('frontend.1st_semester-C');
    }
}
