<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return "<h1> <marquee> Hello dari penggunacontroller yang tidak seberapa oke";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$pengguna = new Pengguna();
    	$pengguna->username = "yayanusi";
    	$pengguna->password = "nusiyaya";
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
}

