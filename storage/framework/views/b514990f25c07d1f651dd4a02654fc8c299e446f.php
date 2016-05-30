<!DOCTYPE html>
<html>
<head>
  <title>Semester</title>
</head>
<body>
	<h1>Semester</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  ID Semester:<br>
  <input type="text" name="id_smt" placeholder=""><br>
  Nama Semester:<br>
  <input type="text" name="nm_smt" placeholder=""><br>
  Semester:<br>
  <input type="number" name="smt" placeholder=""><br>
  Apakah periode aktif:<br>
  <input type="boolean" name="a_aktif" placeholder=""><br><br>
  Tanggal mulai:<br>
  <input type="date" name="tgl_mulai" placeholder=""><br>
  Tanggal selesai:<br>
  <input type="date" name="id_thn_ajar" placeholder=""><br>
  ID Tahun Ajaran:<br>
  <input type="number" name="id_thn_ajar" placeholder=""><br>
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