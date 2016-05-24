<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Request;
// use Input;
use App\Http\Requests;
use Ramsey\Uuid\Uuid;
use App\ptk;



class PtkController extends Controller
{
    //
    public function store()
    {
    	$ptk = new ptk;
    	$ptk->id_ptk = Uuid::uuid4()->getHex();
    	$ptk->nm_ptk = "Rizky";
    	$ptk->jk = "a";
    	$ptk->tgl_lahir= 'Jan-1993-01';
    	$ptk->nidn=294027439;
    	$ptk->nip=234234;
    	$ptk->gelar_depan="DR";
    	$ptk->gelar_belakang="S.KOM";
    	$ptk->email="a@gmail.com";
    	$ptk->inisial="RK";
    	$ptk->no_hp=234234;
        $ptk->created_at= 'Jan-1993-01';
        $ptk->updated_at= 'Jan-1993-01';

    	$ptk->save();

    }

    public function lihat1(Request $request)
    {
        // $ptk['items']=ptk::where('id_ptk',"f11bca5e-f014-4308-b064-5ffd1accf0db")->get();
        // dd($ptk['items']);

        $ptk['item'] = ptk::all();
        return view('coba1', $ptk);
    }

    public function create()
    {
        if (Request::isMethod('get')){
            # code ...
            return view('coba');
            }
        elseif (Request::isMethod('post')){
            # code ...
            // cara1
            // $item = array('id_ptk' => Uuid::uuid4()->getHex(),
            //             'nm_ptk' => Input::get('nm_ptk'),
            //             'jk' => Input::get('jk'),
            //             'tgl_lahir' => Input::get('tgl_lahir'),
            //             'nidn' => Input::get('nidn'),
            //             'nip' => Input::get('nip'),
            //             'gelar_depan' => Input::get('gelar_depan'),
            //             'gelar_belakang' => Input::get('gelar_belakang'),
            //             'email' => Input::get('email'),
            //             'inisial' => Input::get('inisial'),
            //             'no_hp' => Input::get('no_hp'),
            //             'jk' => Input::get('jk'),
            //             'created_at' => Input::get('created_at'),
            //             'updated_at' => Input::get('updated_at'));
            // Ptk::create($item);

            $ptk = new ptk;
            $ptk->id_ptk = Uuid::uuid4()->getHex();
            $ptk->nm_ptk = Input::get('nm_ptk');
            $ptk->jk = Input::get('jk');
            $ptk->tgl_lahir= Input::get('tgl_lahir');
            $ptk->nidn=Input::get('nidn');
            $ptk->nip=Input::get('nip');
            $ptk->gelar_depan=Input::get('gelar_depan');
            $ptk->gelar_belakang=Input::get('gelar_belakang');
            $ptk->email=Input::get('email');
            $ptk->inisial=Input::get('inisial');
            $ptk->no_hp=Input::get('no_hp');
            $ptk->created_at= Input::get('created_at');
            $ptk->updated_at= Input::get('updated_at');

            $ptk->save();

            //cara2(cepat)
             // $itemInput= Input::all();//input dalam form secara otomatis masuk ke database
             // $item=Ptk::create($itemInput);

            // return redirect('bahan');
            }
    }
}
