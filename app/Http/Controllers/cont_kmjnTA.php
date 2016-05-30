<?php
namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;
use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\model_kmjnTA;
class cont_kmjnTA extends Controller
{
    //
    public function lihat(Request $request)
    {
        $cont_kmjnTA['item'] = model_kmjnTA::all();
        return view('\kemajuan tugas akhir\r', $cont_kmjnTA);
    }
    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('\kemajuan tugas akhir\c');
            }
        elseif (Request::isMethod('post')){
        	model_kmjnTA::insert(array(
    			'id_kemajuan_ta'	=> Uuid::uuid4()->getHex(),
    			'tgl_konsul'	=> Input::get('tgl_konsul'),
    			'desk_kemajuan'	=> Input::get('desk_kemajuan'),
    			'komentar'	=> Input::get('komentar'),
    			'a_disetujui'	=> Input::get('a_disetujui'),
    			'tgl_setuju'	=> Input::get('tgl_setuju'),
    			'created_at'	=> Input::get('created_at'),
                'updated_at'    => Input::get('updated_at'),
                'soft_delete'    => Input::get('soft_delete')
    		));
			}
	}
}