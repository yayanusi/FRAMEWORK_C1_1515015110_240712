<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','alamat'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class);
    }

    public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class);
    }


}
