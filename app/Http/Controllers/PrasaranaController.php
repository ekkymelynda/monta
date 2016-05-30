<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\prasarana;

class PrasaranaController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $Prasarana['item'] = prasarana::all();
        return view('\prasarana\r', $Prasarana);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\prasarana\c');
            }
        elseif (Request::isMethod('post')){
        	prasarana::insert(array(
    			'id_prasarana'	=> Uuid::uuid4()->getHex(),
    			'nm_prasarana'	=> Input::get('nm_prasarana'),
    			'created_at'	=> Input::get('created_at'),
                'updated_at'    => Input::get('updated_at'),
                'soft_delete'    => Input::get('soft_delete')
    		));
        $Prasarana['item'] = prasarana::all();
        return view('\prasarana\r', $Prasarana);
			}
	}
}
