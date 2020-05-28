<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BeritaController extends Controller
{
    public function create(){
        return view('admin.berita_form');
    }
}