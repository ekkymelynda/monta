<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Peserta Didik</h1>
<form action="" method="post">
  {{ csrf_field() }}
  ID peserta didik:<br>
  <input type="text" name="id_pd" placeholder=""><br>
  Nama peserta didik:<br>
  <input type="text" name="nm_pd" placeholder=""><br>
  Jenis kelamin:<br>
  <input type="text" name="jk" placeholder=""><br>
  Tanggal lahir:<br>
  <input type="date" name="tgl_lahir" placeholder=""><br>
  NIM/NRP:<br>
  <input type="text" name="nim" placeholder=""><br>
  Email:<br>
  <input type="text" name="email" placeholder=""><br>
  Nomor handphone<br>
  <input type="text" name="no_hp" placeholder=""><br>
  Create date:<br>
  <input type="date" name="created_at" placeholder=""><br>
  Update date:<br>
  <input type="date" name="updated_at" placeholder=""><br>
  Soft delete:<br>
  <input type="boolean" name="soft_delete" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
	</body>
</html>