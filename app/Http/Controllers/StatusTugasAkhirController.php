<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use App\status_tugas_akhir;

class StatusTugasAkhirController extends Controller
{
    public function lihat(Request $request)
    {
        $StatusTugasAkhir['item'] = status_tugas_akhir::all();
        return view('\status tugas akhir\r', $StatusTugasAkhir);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\status tugas akhir\c');
            }
        elseif (Request::isMethod('post')){
        	status_tugas_akhir::insert(array(
    			'id_stat_ta'	=> Input::get('id_thn_ajar'),
    			'nm_stat_ta'	=> Input::get('nm_thn_ajar'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'expired_at'	=> Input::get('expired_at')
    		));
			}
	}
}