<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeventhSemesterBController extends Controller
{
    public function index()
    {
     return view('frontend.7th_semester-B');
    }
}
