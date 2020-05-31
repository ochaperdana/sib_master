<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('tutor.feedback_form');
    }

    public function show($p)
    {
            return view('student.feedback');
        
    }
}