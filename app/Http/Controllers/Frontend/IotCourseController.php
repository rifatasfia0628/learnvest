<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IotCourseController extends Controller
{
    public function index()
    {
     return view('frontend.iot-course');
    }
}
