<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function create(){
        return view('admin.berita_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('news')->insert([
            'id_news' => rand(1001,5001),
            'id_lbb' => $request->id_lbb,
            'date_upload' => date('Y-m-d'),
            'date_publish' => $request->date_publish, 
            'judul' => $request->judul, 
            'news' => $request->news, 
            'type_news' => $request->type_news
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