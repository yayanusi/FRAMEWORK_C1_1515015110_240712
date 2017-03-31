<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $filelable = ['dosen_id','matakuliah_id'];
    protected $guarded = ['id'];

     public function dosen()
   {
   		return $this->hasMany(dosen::class,'dosen_id');
   }


   public function matakuliah()
   {
   		return $this->hasMany(matakuliah::class,'matakuliah_id');
   }


   public function jadwal_matakuliah()
   {
   		return $this->hasOne(jadwal_matakuliah::class,'matakuliah_id');
   }
}
