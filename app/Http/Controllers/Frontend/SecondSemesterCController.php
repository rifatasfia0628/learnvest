<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondSemesterCController extends Controller
{
    public function index()
    {
     return view('frontend.2nd_semester-C');
    }
}
