<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\pen_ten;

class PendidikTenagaController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $PenTen['item'] = pen_ten::all();
        return view('\pendidik dan tenaga kependidikan\r', $PenTen);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\pendidik dan tenaga kependidikan\c');
            }
        elseif (Request::isMethod('post')){
        	pen_ten::insert(array(
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
			}
	}
}
