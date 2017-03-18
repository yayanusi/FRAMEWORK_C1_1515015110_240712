<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal()
    {
    	return "Hello yowman my name is yayanusi";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'yaya';
    	$mahasiswa->alamat = 'samarinda';
    	$mahasiswa->nim = '1515015110';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data dengan nama {$mahasiswa->nama} telah di simpan";
    }
}
