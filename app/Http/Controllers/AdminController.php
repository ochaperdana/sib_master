<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
        //return view('admin.course_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course_form');
    }

    // public function show_tutor()
    // {
    //     return view('admin.tutor_form');
    // }

    // public function show_soal()
    // {
    //     return view('admin.soal_form');
    // }

    // public function show_ujian()
    // {
    //     return view('admin.ujian_form');
    // }

    // public function show_berita()
    // {
    //     return view('admin.berita_form');
    // }
}