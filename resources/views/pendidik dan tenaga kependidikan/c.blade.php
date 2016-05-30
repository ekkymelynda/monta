@extends('layouts.dashboard')
@section('page_heading','Pendidik dan Tenaga Kependidikan')
@section('section')
<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
    <div class="form-group">
    <label>Nama Pendidik dan Tenaga Kependidikan</label>
    <input type="text" class="form-control" name="nm_ptk" placeholder="">
  </div>
  <div class="form-group">
    <label>Jenis kelamin</label>
    <input type="text" class="form-control" name="jk" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" placeholder="">
  <div class="form-group">
    <label>NIDN</label>
    <input type="text" class="form-control" name="nidn" placeholder="">
  </div>
  <div class="form-group">
    <label>NIP</label>
    <input type="text" class="form-control" name="nip" placeholder="">
  </div>
  <div class="form-group">
    <label>Gelar depan</label>
    <input type="text" class="form-control" name="gelar_depan" placeholder="">
  </div>
  <div class="form-group">
    <label>Gelar belakang</label>
    <input type="text" class="form-control" name="gelar_belakang" placeholder="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="">
  </div>
  <div class="form-group">
    <label>Inisial</label>
    <input type="text" class="form-control" name="inisial" placeholder="">
  </div>
  <div class="form-group">
    <label>Nomor handphone</label>
    <input type="text" class="form-control" name="no_hp" placeholder="">
  </div>
  <div class="form-group">
    <label>Create at</label>
    <input type="date" class="form-control" name="created_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Update at</label>
    <input type="date" class="form-control" name="updated_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Soft delete</label>
    <select name="soft_delete" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
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
	<h1>Pendidik dan Tenaga Kependidikan</h1>
<form action="" method="post">
  {{ csrf_field() }}
  ID PTK:<br>
  <input type="text" name="" placeholder=""><br>
  Nama PTK:<br>
  <input type="text" name="" placeholder=""><br>
  Jenis kelamin:<br>
  <input type="text" name="" placeholder=""><br>
  Tanggal lahir:<br>
  <input type="date" name="" placeholder=""><br>
  NIDN:<br>
  <input type="text" name="" placeholder=""><br>
  NIP:<br>
  <input type="text" name="" placeholder=""><br>
  Gelar depan:<br>
  <input type="text" name="" placeholder=""><br>
  Gelar belakang:<br>
  <input type="text" name="" placeholder=""><br>
  Email:<br>
  <input type="text" name="" placeholder=""><br>
  Inisial:<br>
  <input type="text" name="" placeholder=""><br>
  Nomor handphone:<br>
  <input type="text" name="" placeholder=""><br>
  Create date:<br>
  <input type="date" name="" placeholder=""><br>
  Update date:<br>
  <input type="date" name="" placeholder=""><br>
  Soft delete:<br>
  <input type="number" name="" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
	</body>
</html> -->