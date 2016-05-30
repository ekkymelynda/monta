@extends('layouts.dashboard')
@section('page_heading','Rumpun Ilmu')
@section('section')
  <div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID rumpun ilmu</th>
        <th>Nama rumpun ilmu</th>
        <th>ID induk rumpun ilmu</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($item as $i)
        <td>{{$i->id_rumpun_ilmu}}</td>
        <td>{{$i->nm_rumpun_ilmu}}</td>
        <td>{{$i->id_induk_rumpun_ilmu}}</td>
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
  <h1>Rumpun Ilmu</h1>
<table>
    <thead>
      <tr>
        <th>ID rumpun ilmu</th>
        <th>Nama rumpun ilmu</th>
        <th>ID induk rumpun ilmu</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_rumpun_ilmu}}</td>
        <td>{{$i->nm_rumpun_ilmu}}</td>
        <td>{{$i->id_induk_rumpun_ilmu}}</td>
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