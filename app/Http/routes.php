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

Route::get('r_StatBimbing', 'StatusBimbingController@lihat');
Route::get('c_StatBimbing', 'StatusBimbingController@create');
Route::post('r_StatBimbing', array('before' => 'csrf', 'uses' =>'StatusBimbingController@create'));

Route::get('r_PenTen', 'PendidikTenagaController@lihat');
Route::get('c_PenTen', 'PendidikTenagaController@create');
Route::post('r_PenTen', array('before' => 'csrf', 'uses' =>'PendidikTenagaController@create'));

Route::get('r_StatTa', 'StatusTaController@lihat');
Route::get('c_StatTa', 'StatusTaController@create');
Route::post('r_StatTa', array('before' => 'csrf', 'uses' =>'StatusTaController@create'));

Route::get('r_KmjnTa', 'KmjnTaController@lihat');
Route::get('c_KmjnTa', 'KmjnTaController@create');
Route::post('r_KmjnTa', array('before' => 'csrf', 'uses' =>'KmjnTaController@create'));

Route::get('r_ProposalTa', 'ProposalTaController@lihat');
Route::get('c_ProposalTa', 'ProposalTaController@create');
Route::post('r_ProposalTa', array('before' => 'csrf', 'uses' =>'ProposalTaController@create'));

