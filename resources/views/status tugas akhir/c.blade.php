<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Status Tugas Akhir</h1>
<form action="" method="post">
  {{ csrf_field() }}
  ID Status Tugas Akhir:<br>
  <input type="text" name="id_stat_ta" placeholder=""><br>
  Nama Status Tugas Akhir:<br>
  <input type="text" name="nm_stat_ta" placeholder=""><br>
  Create date:<br>
  <input type="date" name="created_at" placeholder=""><br>
  Last Update:<br>
  <input type="date" name="updated_at" placeholder=""><br>
  Expired Date:<br>
  <input type="date" name="expired_at" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
  </body>
</html>
