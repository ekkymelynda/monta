<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\tahun_ajaran;

class TahunAjarController extends Controller
{
    public function lihat(Request $request)
    {
        $TahunAjar['item'] = tahun_ajaran::all();
        return view('\tahun ajaran\r', $TahunAjar);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\tahun ajaran\c');
            }
        elseif (Request::isMethod('post')){
        	tahun_ajaran::insert(array(
    			'id_thn_ajar'	=> Uuid::uuid4()->getHex(),
    			'nm_thn_ajar'	=> Input::get('nm_thn_ajar'),
    			'a_aktif'	=> Input::get('a_aktif'),
    			'tgl_mulai'	=> Input::get('tgl_mulai'),
    			'tgl_selesai'	=> Input::get('tgl_selesai'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
    		));
        $TahunAjar['item'] = tahun_ajaran::all();
        return view('\tahun ajaran\r', $TahunAjar);
			}
	}
}
