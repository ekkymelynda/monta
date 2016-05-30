<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas_akhir extends Model
{
    //
    protected $table = 'tugas_akhir';
    protected $primarykey = 'id_ta';
    public $incrementing = false;

    protected $fillable = [
        'judul_ta',
        'abstrak',
        'kata_kunci',
        'nilai_angka', 
        'id_pd',
        'id_rumpun_ilmu', 
        'id_stat_ta',
        'id_prop_ta',
        'id_nilai_mk',
        'created_at',
        'updated_at',
        'soft_delete'
    ];
    public $timestamps = false;
}
