<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prasarana extends Model
{
    //
    protected $table= 'prasarana';
    protected $primarykey = 'id_prasarana';
    public $incrementing = false;

    protected $fillable =[
    	'nm_prasarana',
    	'created_at',
    	'updated_at',
    	'soft_delete'
    ];

    public $timestamps = false;

}
