<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pen_ten extends Model
{
    //
    protected $table ='ptk';
    protected $primaryKey = 'id_ta';
    public $incrementing = false;
    protected $fillable = [
        'judul_ta',  
        'abstrak',
        'desk_kemajuan',
        'komentar',
        'a_disetujui',
        'tgl_setuju',
        'id_bimbingan',
        'created_at',
        'updated_at',
        'soft_delete'
    ];
    public $timestamps = false;
}
