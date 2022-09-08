<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EighthSemesterController extends Controller
{
    public function index()
    {
     return view('frontend.8thsemester');
    }
}
