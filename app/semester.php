<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    //
    protected $table = 'semester';
    protected $primarykey = 'id_smt';
    public $incrementing = true;

    protected $fillable = [
        'nm_smt',
        'smt',
        'tgl_mulai',
        'tgl_selesai',
        'id_thn_ajar',
        'id_thn_ajar',
        'created_at',
        'updated_at', 
        'expired_at'
    ];
    public $timestamps = false;
}
