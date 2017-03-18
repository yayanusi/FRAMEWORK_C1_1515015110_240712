<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class dosencontroller extends Controller
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
    	$dosen = new Dosen();
    	$dosen->nama = 'yaya';
    	$dosen->alamat = 'samarinda';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data dengan nama {$dosen->nama} telah di simpan";
    }
}
