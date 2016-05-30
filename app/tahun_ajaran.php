<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tahun_ajaran extends Model
{
    //
    protected $table = 'tahun_ajaran';
    protected $primarykey = 'id_thn_ajar';
    public $incrementing = true;

    protected $fillable = [
        'nm_thn_ajar',
        'a_aktif',
        'tgl_mulai',
        'tgl_selesai',
        'created_at',
        'updated_at',
        'expired_at'
    ];
    public $timestamps = false;
}
