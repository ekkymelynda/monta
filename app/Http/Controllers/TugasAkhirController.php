<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\tugas_akhir;

class TugasAkhirController extends Controller
{
    public function lihat(Request $request)
    {
        $TugasAkhir['item'] = tugas_akhir::all();
        return view('\tugas akhir\r', $TugasAkhir);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\tugas akhir\c');
            }
        elseif (Request::isMethod('post')){
        	tugas_akhir::insert(array(
    			'id_ta'	=> Uuid::uuid4()->getHex(),
    			'judul_ta'	=> Input::get('judul_ta'),
    			'abstrak'	=> Input::get('abstrak'),
    			'kata_kunci'	=> Input::get('kata_kunci'),
    			'nilai_angka'	=> Input::get('nilai_angka'),
    			'id_pd'	=> Input::get('id_pd'),
    			'id_rumpun_ilmu'	=> Input::get('id_rumpun_ilmu'),
    			'id_stat_ta'	=> Input::get('id_stat_ta'),
                'id_prop_ta'    => Input::get('id_prop_ta'),
                'id_nilai_mk'    => Input::get('id_nilai_mk'),
                'created_at'    => Input::get('created_at'),
                'updated_at'    => Input::get('updated_at'),
                'soft_delete'    => Input::get('soft_delete'),
    		));
			}
	}
}