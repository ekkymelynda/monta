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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('c_tahun_ajaran', function () {
//     return view('tahun ajaran/c');
// <<<<<<< .mine
// });

Route::get('r_TahunAjar', 'TahunAjarController@lihat');
Route::get('c_TahunAjar', 'TahunAjarController@create');
Route::post('c_TahunAjar', array('before' => 'csrf', 'uses' =>'TahunAjarController@create'));

Route::get('c_peserta_didik', function () {
    return view('peserta didik/c');
});

Route::get('r_PesertaDidik', 'PesertaDidikController@lihat');
Route::get('c_PesertaDidik', 'PesertaDidikController@create');
Route::post('c_PesertaDidik', array('before' => 'csrf', 'uses' =>'PesertaDidikController@create'));

Route::get('c_peserta_didik', function () {
    return view('peserta didik/c');
});
