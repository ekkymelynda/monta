@extends('layouts.dashboard')
@section('page_heading','Tugas Akhir')
@section('section')
<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Judul Tugas Akhir</label>
    <input type="text" class="form-control" placeholder="Masukkan ID" name='judul_ta'>
  </div>
  <div class="form-group">
    <label>Abstrak</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name='abstrak'>
  </div>
  <div class="form-group">
    <label>Kata Kunci</label>
    <input type="input" class="form-control" name="kata_kunci" placeholder="">
  </div>
  <div class="form-group">
    <label>Nilai Angka</label>
    <input type="boolean" name="nilai_angka" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Peserta Didik</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name='id_pd'>
  </div>
  <div class="form-group">
    <label>ID Rumpun Ilmu</label>
    <input type="text" class="form-control" name="id_rumpun_ilmu" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Proposal TA</label>
    <input type="text" name="id_prop_ta" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Nilai Mata Kuliah</label>
    <input type="text" name="id_nilai_mk" placeholder="">
  </div>
  <div class="form-group">
    <label>Create date</label>
    <input type="date" name="created_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Last update</label>
    <input type="date" name="updated_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Expired date</label>
    <input type="date" name="expired_at" placeholder="">
  </div>
  <button type="submit" class="btn btn-default">Submit Button</button>
</form>
</div>
@stop

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Tugas Akhir</h1>
<form action="" method="post">
    {{ csrf_field() }}
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
</html> -->
