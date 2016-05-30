<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_pembimbingan extends Model
{
    //
    protected $table = 'status_pembimbingan';
    protected $primarykey = 'id_stat_bimbing';
    public $incrementing = true;

    protected $fillable = [
        'nm_stat_bimbing',
        'created_at',
        'updated_at',
        'expired_at'
    ];
    public $timestamps = false;
}
