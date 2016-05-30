<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Peserta Didik</h1>
<table>
    <thead>
      <tr>
        <th>ID peserta didik</th>
        <th>nama peserta didik</th>
        <th>Apakah periode aktif</th>
        <th>Tanggal mulai</th>
        <th>Tanggal selesai</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
        <th>Expired date</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_pd}}</td>
        <td>{{$i->nm_pd}}</td>
        <td>{{$i->jk}}</td>
        <td>{{$i->tgl_lahir}}</td>
        <td>{{$i->nim}}</td>
        <td>{{$i->email}}</td>
        <td>{{$i->no_hp}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->soft_delete}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>