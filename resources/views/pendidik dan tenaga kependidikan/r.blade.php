@extends('layouts.dashboard')
@section('page_heading','Pendidik dan Tenaga Kependidikan')
@section('section')
  <div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID PTK</th>
        <th>Nama PTK</th>
        <th>Jenis kelamin</th>
        <th>Tanggal lahir</th>
        <th>NIDN</th>
        <th>NIP</th>
        <th>Gelar depan</th>
        <th>Gelar belakang</th>
        <th>Email</th>
        <th>Inisial</th>
        <th>Nomor handphone</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($item as $i)
        <td>{{$i->id_ptk}}</td>
        <td>{{$i->nm_ptk}}</td>
        <td>{{$i->jk}}</td>
        <td>{{$i->tgl_lahir}}</td>
        <td>{{$i->nidn}}</td>
        <td>{{$i->nip}}</td>
        <td>{{$i->gelar_depan}}</td>
        <td>{{$i->gelar_belakang}}</td>
        <td>{{$i->email}}</td>
        <td>{{$i->inisial}}</td>
        <td>{{$i->no_hp}}</td>
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