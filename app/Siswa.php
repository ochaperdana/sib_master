<?php

namespace App;


class Siswa extends Model
{
    protected $table='siswa';
    protected $fillable=['id_siswa','username', 'password', 'nama', 'alamat', 'telp', 'id_kelas', 'id_prodi', 'status', 'tgl_daftar'];
    public $timestamps = false;
}
