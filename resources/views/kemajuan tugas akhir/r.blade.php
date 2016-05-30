<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Kemajuan Tugas Akhir</h1>
<table>
    <thead>
      <tr>
        <th>ID Kemajuan TA</th>
        <th>Tanggal Konsultasi</th>
        <th>Deskripsi Kemajuan</th>
        <th>Komentar</th>
        <th>Apakah Disetujui</th>
        <th>Tanggal Persetujuan</th>
        <th>ID Bimbingan</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($item as $i)
        <td>{{$i->id_kemajuan_ta}}</td>
        <td>{{$i->tgl_konsul}}</td>
        <td>{{$i->desk_kemajuan}}</td>
        <td>{{$i->komentar}}</td>
        <td>{{$i->a_disetujui}}</td>
        <td>{{$i->tgl_setuju}}</td>
        <td>{{$i->id_bimbingan}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->soft_delete}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>