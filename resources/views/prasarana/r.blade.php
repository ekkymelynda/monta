@extends('layouts.dashboard')
@section('page_heading','Prasarana')
@section('section')
  <div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID Prasarana</th>
        <th>Nama Prasarana</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($item as $i)
        <td>{{$i->id_prasarana}}</td>
        <td>{{$i->nm_prasarana}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->expired_at}}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
  </div>
  </div>
</div>
@stop
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Prasarana</h1>
<table>
    <thead>
      <tr>
        <th>ID Prasarana</th>
        <th>Nama Prasarana</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_prasarana}}</td>
        <td>{{$i->nm_prasarana}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->expired_at}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
  </body>
</html>
 -->
