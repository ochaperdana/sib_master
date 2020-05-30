<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function login()
    {
        return view('main.login');
    }
}