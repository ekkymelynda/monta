@extends('layouts.dashboard')
@section('page_heading','Jenis Sidang')
@section('section')

<div class="col-sm-9">
<form role="form" action="" method="post">
  {{ csrf_field() }}
    <div class="form-group">
    <label>ID Jenis Sidang</label>
    <input type="text" class="form-control" name="id_jns_sidang" placeholder="">
  </div>
  <div class="form-group">
    <label>Nama Jenis Sidang</label>
    <input type="text" class="form-control" name="nm_jns_sidang" placeholder="">
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
    <label>Expired at</label>
    <input type="date" class="form-control" name="expired_at" placeholder="">
  </div>
  <button type="submit" class="btn btn-default">Submit Button</button>
</form>
</div>

@stop