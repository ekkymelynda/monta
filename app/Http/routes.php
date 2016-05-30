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

Route::get('r_RumpunIlmu', 'RumpunIlmuController@lihat');
Route::get('c_RumpunIlmu', 'RumpunIlmuController@create');
Route::post('c_RumpunIlmu', array('before' => 'csrf', 'uses' =>'RumpunIlmuController@create'));

Route::get('r_Semester', 'SemesterController@lihat');
Route::get('c_Semester', 'SemesterController@create');
Route::post('c_Semester', array('before' => 'csrf', 'uses' =>'SemesterController@create'));

Route::get('r_AktMembimbing', 'AktivitasMembimbingController@lihat');
Route::get('c_AktMembimbing', 'AktivitasMembimbingController@create');
Route::post('r_AktMembimbing', array('before' => 'csrf', 'uses' =>'AktivitasMembimbingController@create'));

Route::get('r_Ta', 'TugasAkhirController@lihat');
Route::get('c_Ta', 'TugasAkhirController@create');
Route::post('r_Ta', array('before' => 'csrf', 'uses' =>'TugasAkhirController@create'));

Route::get('r_StatBimbing', 'StatusPembimbinganController@lihat');
Route::get('c_StatBimbing', 'StatusPembimbinganController@create');
Route::post('r_StatBimbing', array('before' => 'csrf', 'uses' =>'StatusPembimbinganController@create'));

Route::get('r_PenTen', 'PendidikTenagaController@lihat');
Route::get('c_PenTen', 'PendidikTenagaController@create');
Route::post('r_PenTen', array('before' => 'csrf', 'uses' =>'PendidikTenagaController@create'));

Route::get('r_StatTa', 'StatusTugasAkhirController@lihat');
Route::get('c_StatTa', 'StatusTugasAkhirController@create');
Route::post('r_StatTa', array('before' => 'csrf', 'uses' =>'StatusTugasAkhirController@create'));

Route::get('r_KmjnTa', 'cont_kmjnTA@lihat');
Route::get('c_KmjnTa', 'cont_kmjnTA@create');
Route::post('r_KmjnTa', array('before' => 'csrf', 'uses' =>'cont_kmjnTA@create'));

Route::get('r_ProposalTa', 'ProposalTugasAkhirController@lihat');
Route::get('c_ProposalTa', 'ProposalTugasAkhirController@create');
Route::post('r_ProposalTa', array('before' => 'csrf', 'uses' =>'ProposalTugasAkhirController@create'));

