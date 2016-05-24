<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tahun_ajaran extends Model
{
    //
    protected $table = 'status_tugas_akhir';
    protected $primarykey = 'id_stat_ta';
    public $incrementing = true;

    protected $fillable = [
        'nm_stat_ta', 'created_at', 'updated_at', 'expired_at'
    ];
    public $timestamps = false;
}
