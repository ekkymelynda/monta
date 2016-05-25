<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use App\status_pembimbingan;

class status_pembimbinganController extends Controller
{
    public function lihat(Request $request)
    {
        $StatusPembimbingan['item'] = status_pembimbingan::all();
        return view('\status pembimbingan\r', $StatusPembimbingan);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\status pembimbingan\c');
            }
        elseif (Request::isMethod('post')){
        	status_pembimbingan::insert(array(
    			'id_stat_bimbing'	=> Input::get('id_stat_bimbing'),
    			'nm_stat_bimbing'	=> Input::get('nm_stat_bimbing'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
    		));
			}
	}
}
