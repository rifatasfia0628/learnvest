<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FifthSemesterBController extends Controller
{
    public function index()
    {
     return view('frontend.5th_semester-B');
    }
}
