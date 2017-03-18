<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
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
    	$jadwal_matakuliah = new Jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = '1';
    	$jadwal_matakuliah->ruangan_id = '1';
    	$jadwal_matakuliah->dosen_matakuliah_id = '1';
    	$jadwal_matakuliah->save();
    	return "Data dengan ruangan_id {$jadwal_matakuliah->ruangan_id} telah di simpan";
    }
}
