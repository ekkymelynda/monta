<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Tahun Ajaran</h1>
<table>
    <thead>
      <tr>
        <th>ID status bimbingan</th>
        <th>Nama status bimbingan</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_stat_bimbing}}</td>
        <td>{{$i->nm_stat_bimb}}</td>
        <td>{{$i->create_at}}</td>
        <td>{{$i->update_at}}</td>
        <td>{{$i->expired_at}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>
