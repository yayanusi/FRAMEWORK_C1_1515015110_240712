<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id', 'ruangan_id', 'dosenmatakuliah_id'];

    public function Mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class);
    }
    
    public function Ruangan()
    {
        return $this->belongsTo(ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(dosen_matakuliah::class, 'dosenmatakuliah_id');
    }

        // public function getNamadsnAttribute(){
    //     return $this->dosen_matakuliah->dosen->nama;
    // }
    // public function getNipdsnAttribute(){
    //     return $this->dosen_matakuliah->dosen->nip;
    // }
    // public function getMKdsnAttribute(){
    //     return $this->dosen_matakuliah->matakuliah->title;
    // }
    
    // public function getNamamhsAttribute(){
    //     return $this->mahasiswa->nama;
    // }
    // public function getNimAttribute(){
    //     return $this->mahasiswa->nim;
    // }
    // public function getTitleruanganAttribute(){
    //     return $this->ruangan->title;
    // }
    
    
    // public function listDosenMatakuliahDanMahasiswaDanRuangan()
    // {
    //  $out = [];
    //  foreach ($this->all() as $jdwlMtk) {
    //      $out[$jdwlMtk->id] = "{$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->mahasiswa->nama} (Ruangan {$jdwlMtk->ruangan->title})";
    //  }
    //  return $out;
    // }

}
