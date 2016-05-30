<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use App\jenis_sidang;

class JenisSidangController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $jenis_sidang['item'] = jenis_sidang::all();
        return view('\jenis sidang\r', $jenis_sidang);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\jenis sidang\c');
            }
        elseif (Request::isMethod('post')){
        	jenis_sidang::insert(array(
    			'id_jns_sidang'	=> Input::get('id_jns_sidang'),
    			'nm_jns_sidang'	=> Input::get('nm_jns_sidang'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
              ));
        	$jenis_sidang['item'] = jenis_sidang::all();
        	return view('\jenis sidang\r', $jenis_sidang);
			}
	}
}
