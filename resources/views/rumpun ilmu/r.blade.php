<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Rumpun Ilmu</h1>
<table>
    <thead>
      <tr>
        <th>ID rumpun ilmu</th>
        <th>Nama rumpun ilmu</th>
        <th>ID induk rumpun ilmu</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_thn_ajar}}</td>
        <td>{{$i->nm_thn_ajar}}</td>
        <td>{{$i->a_aktif}}</td>
        <td>{{$i->tgl_mulai}}</td>
        <td>{{$i->tgl_selesai}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->expired_at}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>
