<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Route::get('hello-world', function () {
    return 'hello world';
});

Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hallo yowman dari pengguna $pengguna";
});


Route::get('berita/{berita?}', function ($berita="laravel 5") {
    return "berita $berita belum di baca";
});


Route::auth();

Route::get('/home', 'HomeController@index');

*/
Route::get('pengguna','penggunacontroller@awal');

Route::get('pengguna/tambah','penggunacontroller@tambah');

Route::get('pengguna/add', function(){
	$pengguna = new App\Pengguna();
    	$pengguna->username = "kahar";
    	$pengguna->password = "nusiyaya";
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
});

Route::get('ruangan','ruangancontroller@awal');

Route::get('matakuliah','matakuliahcontroller@awal');

Route::get('mahasiswa','mahasiswacontroller@awal');

Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');

Route::get('dosen','dosencontroller@awal');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');


