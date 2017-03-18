<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahcontroller extends Controller
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
    	$matakuliah = new Matakuliah();
    	$matakuliah->title = 'SMBD';
    	$matakuliah->keterangan = 'semester 4';
    	$matakuliah->save();
    	return "Data dengan title {$matakuliah->title} telah di simpan";
    }
}
