<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_sidang extends Model
{
    //
    protected $table= 'jenis_sidang';
    protected $primarykey = 'id_jns_sidang';
    public $incrementing = true;

    protected $fillable =[
    	'nm_jns_sidang',
    	'created_at',
    	'updated_at',
    	'soft_delete'
    ];

    public $timestamps = false;
}
