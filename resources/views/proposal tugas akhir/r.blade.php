<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Proposal Tugas Akhir</h1>
<table>
    <thead>
      <tr>
        <th>ID proposal TA</th>
        <th>Judul proposal TA</th>
        <th>Abstrak Proposal TA</th>
        <th>Kata Kunci</th>
        <th>Tanggal pengajuan</th>
        <th>Revisi ke</th>
        <th>Catatan Sidang</th>
        <th>Tanggal penilaian</th>
        <th>Tenggat waktu Perbaikan</th>
        <th>Tanggal pesetujuan</th>
        <th>ID proposal TA sebelumnya</th>
        <th>ID status proposal TA</th>
        <th>ID sidang</th>
        <th>ID rumpun ilmu</th>
        <th>ID pembimbing utama</th>
        <th>ID pembimbing pendamping</th>
        <th>ID peserta didik</th>
        <th>ID semester</th>
        <th>create date</th>
        <th>update date</th>
        <th>soft delete</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($item as $i)
        <td>{{$i->id_prob_ta}}</td>
        <td>{{$i->judul_prob_ta}}</td>
        <td>{{$i->abstrak_prob_ta}}</td>
        <td>{{$i->kata_kunci}}</td>
        <td>{{$i->tgl_ajuan}}</td>
        <td>{{$i->revisi_ke}}</td>
        <td>{{$i->catatan_sidang}}</td>
        <td>{{$i->tgl_nilai}}</td>
        <td>{{$i->tenggat_wkt_perbaikan}}</td>
        <td>{{$i->tgl_setuju}}</td>
        <td>{{$i->id_prev_prov_ta}}</td>
        <td>{{$i->id_stat_prob_ta}}</td>
        <td>{{$i->id_sidang}}</td>
        <td>{{$i->id_rumpun_ilmu}}</td>
        <td>{{$i->id_bimbing_utama}}</td>
        <td>{{$i->id_bimbing_damping}}</td>
        <td>{{$i->id_pd}}</td>
        <td>{{$i->id_smt}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->soft_delete}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>
