<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebDevelopingCourseController extends Controller
{
    public function index()
    {
     return view('frontend.web-developing-course');
    }
}
