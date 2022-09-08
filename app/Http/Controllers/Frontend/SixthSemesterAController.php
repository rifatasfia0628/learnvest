<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SixthSemesterAController extends Controller
{
    public function index()
    {
     return view('frontend.6th_semester-A');
    }
}
