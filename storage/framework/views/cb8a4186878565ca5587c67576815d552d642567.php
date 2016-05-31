<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Tugas Akhir</h1>
<form action="" method="post">
    <?php echo e(csrf_field()); ?>

  Judul Tugas Akhir:<br>
  <input type="text" name="judul_ta" placeholder=""><br>
  Abstrak:<br>
  <input type="text" name="abstrak" placeholder=""><br>
  Kata Kunci:<br>
  <input type="text" name="kata_kunci" placeholder=""><br>
  Nilai Angka:<br>
  <input type="boolean" name="nilai_angka" placeholder=""><br>
  ID Peserta Didik:<br>
  <input type="text" name="id_pd" placeholder=""><br>
  ID Rumpun Ilmu:<br>
  <input type="boolean" name="id_rumpun_ilmu" placeholder=""><br>
  ID Status Tugas Akhir:<br>
  <input type="boolean" name="id_stat_ta" placeholder=""><br>
  ID Proposal TA:<br>
  <input type="text" name="id_prop_ta" placeholder=""><br>
  ID Nilai Mata Kuliah:<br>
  <input type="boolean" name="id_nilai_mk" placeholder=""><br>
  Create date:<br>
  <input type="date" name="created_at" placeholder=""><br>
  Update date:<br>
  <input type="date" name="updated_at" placeholder=""><br>
  Soft delete:<br>
  <input type="boolean" name="soft_delete" placeholder=""><br><br>

  <input type="submit" value="Submit">
</form>
	</body>
</html>
