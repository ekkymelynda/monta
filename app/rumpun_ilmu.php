<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumpun_ilmu extends Model
{
    //
    protected $table = 'rumpun_ilmu';
    protected $primarykey = 'id_rumpun_ilmu';
    public $incrementing = true;

    protected $fillable = [
        'nm_rumpun_ilmu', 'id_induk_rumpun_ilmu', 'created_at', 'updated_at', 'expired_at'
    ];
    public $timestamps = false;
}
