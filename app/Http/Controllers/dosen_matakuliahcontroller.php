<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;
use App\Dosen;
use App\Matakuliah;
use App\Jadwal_Matakuliah;

class dosen_matakuliahcontroller extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaDosen_Matakuliah = Dosen_Matakuliah::all();
        return view('dosen_matakuliah.awal', compact('semuaDosen_Matakuliah'));
        // return "Hello dari Dosen_MatakuliahController";
    }
    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.tambah',compact('dosen','matakuliah'));
        return $this->simpan();
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));

        if($dosen_matakuliah->save()) {
            $this->informasi = "Jadwal Dosen Mengajar berhasil disimpan";
        }
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
        // $dosen_matakuliah = new Dosen_Matakuliah();
        // $dosen_matakuliah->dosen_id = 1;
        // $dosen_matakuliah->matakuliah_id = 1;
        
        // $dosen_matakuliah->save();
        // return "Data dengan id dosen : {$dosen_matakuliah->dosen_id} dan id matakuliah : {$dosen_matakuliah->matakuliah_id} Telah Disimpan";
        
    }
    public function lihat($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));
    }
    public function edit($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        if($dosen_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('dosen_matakuliah')-> with(['informasi'=>$this->informasi]);
    }
}
