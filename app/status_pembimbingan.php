<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_pembimbingan extends Model
{
    //
    protected $table = 'status_bimbing';
    protected $primarykey = 'id_stat_bimbing';
    public $incrementing = true;

    protected $fillable = [
        'nm_stat_bimb',
        'created_at',
        'updated_at',
        'expired_at'
    ];
    public $timestamps = false;
}
