<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\peserta_didik;

class PesertaDidikController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $PesertaDidik['item'] = peserta_didik::all();
        return view('\peserta didik\r', $PesertaDidik);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\peserta didik\c');
            }
        elseif (Request::isMethod('post')){
        	peserta_didik::insert(array(
    			'id_pd'	=> Uuid::uuid4()->getHex(),
    			'nm_pd'	=> Input::get('nm_pd'),
    			'jk'	=> Input::get('jk'),
    			'tgl_lahir'	=> Input::get('tgl_lahir'),
    			'nim'	=> Input::get('nim'),
    			'email'	=> Input::get('email'),
    			'no_hp'	=> Input::get('no_hp'),
    			'created_at'	=> Input::get('created_at'),
                'updated_at'    => Input::get('updated_at'),
                'soft_delete'    => Input::get('soft_delete')
    		));
        $PesertaDidik['item'] = peserta_didik::all();
        return view('\peserta didik\r', $PesertaDidik);
			}
	}
}
