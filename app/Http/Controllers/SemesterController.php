<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SemesterController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $Semester['item'] = tahun_ajaran::all();
        return view('\semester\r', $Semester);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\semester\c');
            }
        elseif (Request::isMethod('post')){
        	tahun_ajaran::insert(array(
    			'id_smt'	=> Input::get('id_smt'),
    			'nm_smt'	=> Input::get('nm_smt'),
    			'smt'	=> Input::get('smt'),
    			'tgl_mulai'	=> Input::get('tgl_mulai'),
    			'tgl_selesai'	=> Input::get('tgl_selesai'),
    			'id_thn_ajar'	=> Input::get('id_thn_ajar'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
    		));
			}
	}
}
