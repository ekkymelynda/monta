@extends('layouts.dashboard')
@section('page_heading','Sidang')
@section('section')

<div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID sidang</th>
        <th>Judul sidang</th>
        <th>Tanggal sidang</th>
        <th>Waktu mulai</th>
        <th>Waktu selesai</th>
        <th>Notula</th>
        <th>ID inisiator</th>
        <th>ID semester</th>
        <th>ID jenis sidang</th>
        <th>ID prasarana</th>
        <th>ID rumpun ilmu</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($item as $i)
        <td>{{$i->id_sidang}}</td>
        <td>{{$i->judul_sidang}}</td>
        <td>{{$i->tgl_sidang}}</td>
        <td>{{$i->wkt_mulai}}</td>
        <td>{{$i->wkt_selesai}}</td>
        <td>{{$i->notula}}</td>
        <td>{{$i->id_inisiator}}</td>
        <td>{{$i->smt}}</td>
        <td>{{$i->id_jns_sidang}}</td>
        <td>{{$i->id_prasarana}}</td>
        <td>{{$i->id_rumpun_ilmu}}</td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>{{$i->soft_delete}}</td>
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