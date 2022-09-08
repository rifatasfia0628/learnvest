<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AndroidJobsController extends Controller
{
    public function index()
    {
     return view('frontend.android-job');
    }
}
