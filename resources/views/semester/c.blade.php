@extends('layouts.dashboard')
@section('page_heading','Semester')
@section('section')
<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>ID Semester</label>
    <input type="text" class="form-control" placeholder="Masukkan ID" name='id_smt'>
  </div>
  <div class="form-group">
    <label>Nama Semester</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name='nm_smt'>
  </div>
  <div class="form-group">
    <label>Semester</label>
    <input type="number" class="form-control" placeholder="Masukkan semester" name='smt'>
  </div>
  <div class="form-group">
    <label>Periode Aktif</label>
    <select name="a_aktif" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tanggal mulai</label>
    <input type="date" name="tgl_mulai" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal selesai</label>
    <input type="date" name="tgl_selesai" placeholder="">
  </div>
  <div class="form-group">
    <label>Create date</label>
    <input type="date" name="created_at" placeholder="">
  </div>
    <div class="form-group">
    <label>ID Tahun Ajaran</label>
    <select name="id_thn_ajar" class="form-control">
      @foreach ($item1 as $i)
      <option>{{$i->id_thn_ajar}}</option>
    </select>
  </div>
  <div class="form-group">
    <label>Soft delete</label>
    <select name="soft_delete" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
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

<!--<!DOCTYPE html>
<html>
<head>
  <title>Semester</title>
</head>
<body>
	<h1>Semester</h1>
<form action="" method="post">
  {{ csrf_field() }}
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
  <input type="date" name="tgl_selesai" placeholder=""><br>
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
</html> -->