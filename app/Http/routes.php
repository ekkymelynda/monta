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

Route::get('r_TahunAjar', 'TahunAjarController@lihat');
Route::get('c_TahunAjar', 'TahunAjarController@create');
Route::post('c_TahunAjar', array('before' => 'csrf', 'uses' =>'TahunAjarController@create'));

Route::get('r_PesertaDidik', 'PesertaDidikController@lihat');
Route::get('c_PesertaDidik', 'PesertaDidikController@create');
Route::post('c_PesertaDidik', array('before' => 'csrf', 'uses' =>'PesertaDidikController@create'));

Route::get('c_akt_bimbing', function () {
    return view('aktivitas membimbing/c');
});

Route::get('r_akt_bimbing', function () {
    return view('aktivitas membimbing/r');
});
Route::get('c_TA', function () {
    return view('proposal tugas akhir/c');
});
Route::get('r_TA', function () {
    return view('proposal tugas akhir/r');
});
Route::get('c_stat_bimbing', function () {
    return view('status pembimbingan/c');
});
Route::get('r_stat_bimbing', function () {
    return view('status pembimbingan/r');
});

Route::get('r_TahunAjar', 'TahunAjarController@lihat');
Route::get('c_TahunAjar', 'TahunAjarController@create');
Route::post('c_TahunAjar', array('before' => 'csrf', 'uses' =>'TahunAjarController@create'));

Route::get('c_peserta_didik', function () {
    return view('peserta didik/c');
});

Route::get('c_peserta_didik', function () {
    return view('peserta didik/c');
});

Route::get('c_pen_ten', function () {
    return view('pendidik dan tenaga kependidikan/c');
});

Route::get('r_pen_ten', function () {
    return view('pendidik dan tenaga kependidikan/r');
});

Route::get('c_rumpun_ilmu', function () {
    return view('rumpun ilmu/c');
});

Route::get('r_rumpun_ilmu', function () {
    return view('rumpun ilmu/r');
});

Route::get('c_stat_ta', function () {
    return view('status tugas akhir/c');
});

Route::get('r_stat_ta', function () {
    return view('status tugas akhir/r');
});

Route::get('r_semester', function () {
    return view('semester/r');
});

Route::get('c_semester', function () {
    return view('semester/c');
});

Route::get('r_kmjn_TA', function () {
    return view('kemajuan tugas akhir/c');
});

Route::get('r_kmjn_TA', function () {
    return view('kemajuan tugas akhir/r');
});

Route::get('c_proposal_TA', function () {
    return view('proposal tugas akhir/c');
});

Route::get('r_proposal_TA', function () {
    return view('proposal tugas akhir/r');
});

Route::get('liat', 'PtkController@lihat1');
Route::get('buat_ptk', 'PtkController@create');
Route::post('buat_ptk', array('before' => 'csrf', 'uses' =>'PtkController@create'));