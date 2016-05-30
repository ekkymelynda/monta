@extends('layouts.dashboard')
@section('page_heading','Prasarana')
@section('section')
<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>ID Prasarana</label>
    <input class="form-control" placeholder="Masukkan ID" name='id_prasarana'>
  </div>
  <div class="form-group">
    <label>Nama rumpun ilmu</label>
    <input class="form-control" placeholder="Masukkan nama" name='nm_prasarana'>
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
<body> -->
	<!-- <h1>Rumpun Ilmu</h1>
<form action="" method="post">
  {{ csrf_field() }}
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
</html> -->
