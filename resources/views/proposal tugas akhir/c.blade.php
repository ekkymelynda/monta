<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Proposal TA</h1>
<form action="" method="post">
  {{ csrf_field() }}
  Judul Proposal TA:<br>
  <input type="text" name="judul_prop_ta" placeholder=""><br>
  Abstrak Proposal TA:<br>
  <input type="text" name="abstrak_prop_ta" placeholder=""><br>
  kata kunci<br>
  <input type="text" name="kata_kunci" placeholder=""><br>
  Tanggal pengajuan:<br>
  <input type="date" name="tgl_ajuan" placeholder=""><br>
  Revisi ke:<br>
  <input type="number" name="revisi_ke" placeholder=""><br>
  Catatan Sidang:<br>
  <input type="text" name="catatan_sidang" placeholder=""><br>
  Tanggal Penilaian:<br>
  <input type="date" name="tgl_nilai" placeholder=""><br>
  Tenggat waktu perbaikan:<br>
  <input type="date" name="tenggat_wkt_perbaikan" placeholder=""><br>
  Tanggal Persetujuan:<br>
  <input type="date" name="tgl_setuju" placeholder=""><br>
  ID Status proposal TA:<br>
  <input type="number" name="id_stat_prop_ta" placeholder=""><br>
  ID Rumpun ilmu:<br>
  <input type="number" name="id_rumpun_ilmu" placeholder=""><br>
  ID semester:<br>
  <input type="number" name="id_smt" placeholder=""><br>
  Create date:<br>
  <input type="datetime" name="created_at" placeholder=""><br>
  Update date:<br>
  <input type="datetime" name="updated_at" placeholder=""><br>
  Soft delete:<br>
  <input type="number" name="soft_delete" placeholder=""><br><br>
  <input type="submit" value="Submit">
</form>
	</body>
</html>
