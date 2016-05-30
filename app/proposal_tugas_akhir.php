<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposal_tugas_akhir extends Model
{
    //
    protected $table = 'proposal_tugas_akhir';
    protected $primarykey = 'id_prob_ta';
    public $incrementing = false;

    protected $fillable = [
        'judul_prob_ta',
        'abstrak_prob_ta',
        'kata_kunci',
        'tgl_ajuan',
        'revisi_ke',
        'catatan_sidang',
        'tgl_nilai',
        'tenggat_wkt_perbaikan',
        'tgl_setuju',
        'id_prev_prov_ta',
        'id_stat_prob_ta',
        'id_sidang',
        'id_rumpun_ilmu',
        'id_bimbing_utama',
        'id_bimbing_damping',
        'id_pd',
        'id_smt',
        'created_at',
        'updated_at',
        'soft_delete'
    ];
    public $timestamps = false;
}
