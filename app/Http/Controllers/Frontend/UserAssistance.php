<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAssistance extends Controller
{
    public function index()
    {
     return view('frontend.user_assistance');
    }
}
