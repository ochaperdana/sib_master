<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soal_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('soal')->insert([
            'id_soal' => rand(101,47889),
            'id_ujian' => $request->id_ujian,
            'soal' => $request->soal,
            'pilihan1' => $request->pilihan1,
            'pilihan2' => $request->pilihan2,
            'pilihan3' => $request->pilihan3,
            'pilihan4' => $request->pilihan4,
            'pilihan5' => $request->pilihan5,
            'jawab' => $request->jawab
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
}