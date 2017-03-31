<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';
     protected $filelable = ['title'];
    protected $guarded = ['id'];

     public function jadwal_matakuliah()
   {
   		return $this->belongsTo(jadwal_matakuliah::class);
   }

}
