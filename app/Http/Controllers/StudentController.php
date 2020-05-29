<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class StudentController extends Controller
{

    public function index()
    {
        return view('student.index');
    }

    public function create()
    {
        return view('admin.student_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'id_siswa' => $request->id_siswa,
            'username' => $request->username,
            'password' => $request->password, 
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'id_kelas' => $request->id_kelas,
            'id_prodi' => $request->id_prodi,
            'status' => $request->status,
            'tgl_daftar' => $request->tgl_daftar
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