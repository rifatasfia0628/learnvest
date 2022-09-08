<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IotResearchController extends Controller
{
    public function index()
    {
     return view('frontend.iot-research');
    }
}
