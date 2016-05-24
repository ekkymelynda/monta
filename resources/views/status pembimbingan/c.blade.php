<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>

	<h1>Tahun Ajaran</h1>
<form action="" method="post">
  {{ csrf_field() }}
  ID Status Bimbingan:<br>
  <input type="number" name="id_stat_bimbing" placeholder=""><br>
  Nama Status Bimbingan:<br>
  <input type="text" name="nm_stat_bimb" placeholder=""><br>
  Create Date:<br>
  <input type="date" name="create_at" placeholder=""><br><br>
  Last Update:<br>
  <input type="date" name="update_at" placeholder=""><br>
  Expired Date:<br>
  <input type="date" name="expired_at" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
</body>
</html>
