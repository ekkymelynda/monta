<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ptk extends Model
{
    //
    protected $table ='kemajuan_ta';
    protected $primaryKey = 'id_kemajuan_ta';
    public $incrementing = false;
    protected $fillable = [
        'id_kemajuan_ta',  
        'tgl_konsul',
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