<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AiAssistanceController extends Controller
{
    public function index()
   {
    return view('frontend.ai-assistance');
   }
}
