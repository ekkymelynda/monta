@extends('layouts.dashboard')
@section('page_heading','Sidang')
@section('section')

<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
  <!-- <div class="form-group">
    <label>ID sidang</label>
    <input class="form-control" placeholder="Masukkan ID" name='id_sidang'>
  </div> -->
  <div class="form-group">
    <label>Judul sidang</label>
    <input class="form-control" placeholder="Masukkan judul sidang" name="judul_sidang">
  </div>
  <div class="form-group">
    <label>Tanggal sidang</label>
    <input type="date" name="tgl_sidang" placeholder="">
  </div>
  <div class="form-group">
    <label>Waktu mulai</label>
    <input type="time" name="wkt_mulai" placeholder="">
  </div>
  <div class="form-group">
    <label>Waktu selesai</label>
    <input type="time" name="wkt_selesai" placeholder="">
  </div>
  <div class="form-group">
    <label>Notula</label>
    <input type="form-control" name="notula" placeholder="Masukkan notula">
  </div>
  <div class="form-group">
    <label>ID inisiator</label>
    <input type="form-control" name="id_inisiator" placeholder="Masukkan ID inisiator">
  </div>
  <div class="form-group">
    <label>ID Semester</label>
    <input type="form-control" name="id_smt" placeholder="Masukkan ID semseter">
  </div>
  <div class="form-group">
    <label>ID jenis sidang</label>
    <input type="form-control" name="id_jns_sidang" placeholder="Masukkan ID jenis sidang">
  </div>
  <div class="form-group">
    <label>ID prasarana</label>
    <input type="form-control" name="id_prasarana" placeholder="Masukkan ID prasarana">
  </div>
  <div class="form-group">
    <label>ID rumpun ilmu</label>
    <input type="form-control" name="notula" placeholder="Masukkan notula">
  </div>
  <div class="form-group">
    <label>Create date</label>
    <input type="date" name="created_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Update date</label>
    <input type="date" name="updated_at" placeholder="">
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