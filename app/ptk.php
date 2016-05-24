<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ptk extends Model
{
    //

    protected $table ='ptk';
    protected $primaryKey = 'id_ptk';
    public $incrementing = false;
    protected $fillable = [
        'nm_ptk', 
        'jk', 
        'tgl_lahir', 
        'nidn',
        'nip', 
        'gelar_depan',
        'gelar_belakang',
        'email',
        'inisial',
        'no_hp',
        'created_at', 
        'updated_at', 
        'soft_delete'
    ];
    public $timestamps = false;
}
