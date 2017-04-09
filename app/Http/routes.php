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
Route::get('/',function(){
	return view ('master');

});
Route::get('pengguna','penggunacontroller@awal');

Route::get('pengguna/tambah','penggunacontroller@tambah');
/*
Route::get('pengguna/add', function(){
	$pengguna = new App\Pengguna();
    	$pengguna->username = "kahar";
    	$pengguna->password = "nusiyaya";
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
});
*/
Route::get('ruangan','ruangancontroller@awal');

Route::get('matakuliah','matakuliahcontroller@awal');

Route::get('mahasiswa','mahasiswacontroller@awal');

Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');

Route::get('dosen','dosencontroller@awal');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');

Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');
Route::post('pengguna/simpan','penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}','penggunacontroller@hapus');

Route::get('matakuliah/lihat/{matakuliah}','matakuliahcontroller@lihat');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');

Route::get('ruangan/lihat/{ruangan}','ruangancontroller@lihat');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswacontroller@lihat');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::post('mahasiswa/simpan','mahasiswacontroller@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');

Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','jadwal_matakuliahcontroller@lihat');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahcontroller@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahcontroller@hapus');

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');
Route::post('dosen_matakuliah','dosen_matakuliahcontroller@awal');


Route::get('dosen/lihat/{dosen}','dosencontroller@lihat');
Route::get('dosen/tambah','dosencontroller@tambah');
Route::post('dosen/simpan','dosencontroller@simpan');
Route::get('dosen/edit/{dosen}','dosencontroller@edit');
Route::post('dosen/edit/{dosen}','dosencontroller@update');
Route::get('dosen/hapus/{dosen}','dosencontroller@hapus');












