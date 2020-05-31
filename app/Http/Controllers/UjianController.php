<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjianController extends Controller
{

    public function create(){
        return view('admin.ujian_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('ujian')->insert([
            'id_ujian' => rand(110,5800),
            'id_kelas' => $request->id_kelas,
            'nama_ujian' => $request->nama_ujian,
            'waktu' => $request->time, 
            'date' => $request->date,
            'id_penilaian' => 1,
            'file_ujian' => $request->file_ujian,
            'status' => $request->status
        ]);
        // $siswas=$this->validate(request(), [
        //     'id_siswa' => 'required',
        //     'username' => 'required',
        //     'password' => 'required', 
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'telp' => 'required',
        //     'id_kelas' => 'required',
        //     'id_prodi' => 'required',
        //     'status' => 'required',
        //     'tgl_daftar' => 'required']);
        //     Siswa::create($siswas);
            return \redirect('admin')->with('success', 'Berhasil menambah!');
    }

    public function show($p)
    {
        if ($p=='admin') {
            return view('admin.ujian');
        } else {
            return view('student.ujian');
        }
        
    }
}