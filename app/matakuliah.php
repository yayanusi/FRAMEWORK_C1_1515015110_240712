<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $filelable = ['title','keterangan'];
    protected $guarded = ['id'];

    public function dosen_matakuliah()
   {
   		return $this->belongsTo(dosen_matakuliah::class);
   }
    
    
}
