<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\peserta_didik;
class sidangController extends Controller
{
    //
    public function lihat(Request $request)
    {
        $sidang['item'] = sidang::all();
        return view('\sidang\r', $sidang);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\sidang\c');
            }
        elseif (Request::isMethod('post')){
        	peserta_didik::insert(array(
    			'id_sidang'	=> Uuid::uuid4()->getHex(),
    			'judul_sidang'	=> Input::get('judul_sidang'),
    			'tgl_sidang'	=> Input::get('tgl_sidang'),
    			'wkt_selesai'	=> Input::get('wkt_selesai'),
    			'notula'	=> Input::get('notula'),
    			'id_inisiator'	=> Input::get('id_inisiator'),
    			'id_smt'	=> Input::get('id_smt'),
    			'id_jns_sidang'	=> Input::get('id_jns_sidang'),
                'id_prasarana'    => Input::get('id_prasarana'),
                'id_rumpun_ilmu'    => Input::get('id_rumpun_ilmu'),
                'created_at'	=> Input::get('created_at'),
                'updated_at'    => Input::get('updated_at'),
                'soft_delete'    => Input::get('soft_delete')
    		));
			}
	}
}
