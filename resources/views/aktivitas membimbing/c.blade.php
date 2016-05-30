@extends('layouts.dashboard')
@section('page_heading','Aktivitas Membimbing')
@section('section')
<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Urutan Pembimbing</label>
    <input type="number" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal mulai</label>
    <input type="date" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal selesai</label>
    <input type="date" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Persetujuan maju sidang</label>
    <input type="number" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal persetujuan</label>
    <input type="date" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Status pembimbingan</label>
    <input type="number" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>ID semester mulai</label>
    <input type="text" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>ID semester selesai</label>
    <input type="text" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Create at</label>
    <input type="datetime" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Update at</label>
    <input type="datetime" class="form-control" name="" placeholder="">
  </div>
  <div class="form-group">
    <label>Soft delete</label>
    <select name="" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit Button</button>
</form>
</div>
@stop