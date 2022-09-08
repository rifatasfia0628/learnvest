<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Newresearchpapers;

class WebDevelopingResearchController extends Controller
{
    public function index()
    {
     return view('frontend.web-developing-research');
    }
}
