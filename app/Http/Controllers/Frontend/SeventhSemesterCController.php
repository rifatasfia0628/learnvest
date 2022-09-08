<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeventhSemesterCController extends Controller
{
    public function index()
    {
     return view('frontend.7th_semester-C');
    }
}
