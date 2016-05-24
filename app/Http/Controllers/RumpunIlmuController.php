<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RumpunIlmuController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $RumpunIlmu['item'] = tahun_ajaran::all();
        return view('\rumpun ilmu\r', $RumpunIlmu);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\rumpun ilmu\c');
            }
        elseif (Request::isMethod('post')){
        	tahun_ajaran::insert(array(
    			'id_rumpun_ilmu'	=> Input::get('id_rumpun_ilmu'),
    			'nm_rumpun_ilmu'	=> Input::get('nm_rumpun_ilmu'),
    			'id_induk_rumpun_ilmu'	=> Input::get('id_induk_rumpun_ilmu'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
    		));
			}
	}
}
