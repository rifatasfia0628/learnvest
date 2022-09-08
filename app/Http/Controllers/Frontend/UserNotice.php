<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
class UserNotice extends Controller
{
    public function index()
    {
     return view('frontend.user_notice');
    }

}
