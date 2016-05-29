<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Rumpun Ilmu</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  ID rumpun ilmu:<br>
  <input type="number" name="id_rumpun_ilmu" placeholder=""><br>
  Nama rumpun ilmu:<br>
  <input type="text" name="nm_rumpun_ilmu" placeholder=""><br>
  ID induk rumpun ilmu:<br>
  <input type="number" name="id_induk_rumpun_ilmu" placeholder=""><br>
  Create date:<br>
  <input type="date" name="created_at" placeholder=""><br>
  Last update:<br>
  <input type="date" name="updated_at" placeholder=""><br>
  Expired date:<br>
  <input type="datetime" name="expired_at" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
	</body>
</html>
