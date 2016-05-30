<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_didik extends Model
{
    //
    protected $table= 'peserta_didik';
    protected $primarykey = 'id_pd';
    public $incrementing = false;

    protected $fillable =[
    	'nm_pd',
    	'jk',
    	'tgl_lahir',
    	'nim',
    	'email',
    	'no_hp',
    	'created_at',
    	'updated_at',
    	'soft_delete'
    ];

    public $timestamps = false;

}
