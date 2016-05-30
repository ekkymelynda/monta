<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sidang extends Model
{
    //
    protected $table= 'sidang';
    protected $primarykey = 'id_sidang';
    public $incrementing = false;

    protected $fillable =[
    	'judul_sidang',
    	'tgl_sidang',
    	'wkt_mulai',
    	'wkt_selesai',
    	'notula',
    	'id_inisiator',
    	'id_smt',
    	'id_jns_sidang',
    	'id_prasarana',
    	'id_rumpun_ilmu',
    	'created_at',
    	'updated_at',
    	'soft_delete'
    ];

    public $timestamps = false;
}
