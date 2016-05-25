<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;

use App\Http\Requests;
use App\proposal_tugas_akhir;

class proposal_tugas_akhirController extends Controller
{
    public function lihat(Request $request)
    {
        $ProposalTugasAkhir['item'] = proposal_tugas_akhir::all();
        return view('\proposal tugas akhir\r', $ProposalTugasAkhir);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\proposal tugas akhir\c');
            }
        elseif (Request::isMethod('post')){
        	proposal_tugas_akhir::insert(array(
    			'id_prob_ta'	=> Input::get('id_prob_ta'),
    			'abstrak_prob_ta'	=> Input::get('abstrak_prob_ta'),
          'kata_kunci'	=> Input::get('kata_kunci'),
          'tgl_ajuan'	=> Input::get('tgl_ajuan'),
          'revisi_ke'	=> Input::get('revisi_ke'),
          'catatan_sidang'	=> Input::get('catatan_sidang'),
          'tgl_nilai'	=> Input::get('tgl_nilai'),
          'tenggat_wkt_perbaikan'	=> Input::get('tenggat_wkt_perbaikan'),
          'tgl_setuju'	=> Input::get('tgl_setuju'),
          'id_prev_prov_ta'	=> Input::get('id_prev_prov_ta'),
          'id_stat_prob_ta'	=> Input::get('id_stat_prob_ta'),
          'id_sidang'	=> Input::get('id_sidang'),
          'id_rumpun_ilmu'	=> Input::get('id_rumpun_ilmu'),
          'id_bimbing_utama'	=> Input::get('id_bimbing_utama'),
          'id_bimbing_damping'	=> Input::get('id_bimbing_damping'),
          'id_pd'	=> Input::get('id_pd'),
          'id_smt'	=> Input::get('id_smt'),
    			'created_at'	=> Input::get('created_at'),
    			'updated_at'	=> Input::get('updated_at'),
    			'soft_delete'	=> Input::get('soft_delete')
    		));
			}
	}
}
