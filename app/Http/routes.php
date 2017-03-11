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

Route::get('hello-world', function () {
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
