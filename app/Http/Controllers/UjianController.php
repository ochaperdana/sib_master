<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UjianController extends Controller
{

    public function create(){
        return view('admin.ujian_form');
    }
}