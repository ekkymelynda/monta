<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>

	<h1>Tahun Ajaran</h1>
<form action="" method="post">
  {{ csrf_field() }}
  ID tahun ajaran:<br>
  <input type="number" name="id_thn_ajar" placeholder=""><br>
  Nama tahun ajaran:<br>
  <input type="text" name="nm_thn_ajar" placeholder=""><br>
  Apakah periode aktif:<br>
  <input type="boolean" name="a_aktif" placeholder=""><br><br>
  Tanggal mulai:<br>
  <input type="date" name="tgl_mulai" placeholder=""><br>
  Tanggal selesai:<br>
  <input type="date" name="tgl_selesai" placeholder=""><br>
  Create date:<br>
  <input type="datetime" name="created_at" placeholder=""><br><br>
  Last update:<br>
  <input type="datetime" name="updated_at" placeholder=""><br><br>
  Expired date:<br>
  <input type="datetime" name="expired_at" placeholder=""><br><br>

  <input type="submit" value="Submit">
</form>
</body>
</html>