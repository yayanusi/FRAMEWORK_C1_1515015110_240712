<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
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
    	$ruangan = new Ruangan();
    	$ruangan->title = 'ruang 1';
    	$ruangan->save();
    	return "Data dengan title {$ruangan->title} telah di simpan";
    }
}
