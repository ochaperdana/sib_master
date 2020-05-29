<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course_form');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('materi')->insert([
            'id_materi' => $request->id_materi,
            'id_kategori' => $request->id_kategori,
            'judul' => $request->judul, 
            'ket' => $request->ket,
            'file' => $request->file,
            'isi' => $request->isi,
            'type_materi' => $request->type_materi,
            'id_user' => 1,
            'tgl_upload' => date('Y-m-d'),
            'type_siswa' => $request->type_siswa
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