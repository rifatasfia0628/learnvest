<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThirdSemesterAController extends Controller
{
    public function index()
    {
     return view('frontend.3rd_semester-A');
    }
}
