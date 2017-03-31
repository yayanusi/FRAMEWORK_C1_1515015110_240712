<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
   // protected $filelable = ['nama','alamat','nim'];
    protected $guarded=['id'];

    public function pengguna()
   {
   		return $this->belongsTo(pengguna::class);
   }

    public function jadwal_matakuliah()
   {
   		return $this->hasMany(jadwal_matakuliah::class,'mahasiswa_id');
   }
}
