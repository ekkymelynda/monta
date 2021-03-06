@extends('layouts.dashboard')
@section('page_heading','Tugas Akhir')
@section('section')
  <div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID Tugas Akhir</th>
        <th>Judul Tugas Akhir</th>
        <th>Abstrak</th>
        <th>Kata Kunci</th>
        <th>Nilai Angka</th>
        <th>ID Peserta Didik</th>
        <th>ID Rumpun Ilmu</th>
        <th>ID Status Tugas Akhir</th>
        <th>ID Proposal TA</th>
        <th>ID Nilai Mata Kuliah</th>
        <th>Create Date</th>
        <th>Update Date</th>
        <th>Soft Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($item as $i)
        <td>{{$i->id_ta}}</td>
        <td>{{$i->judul_ta}}</td>
        <td>{{$i->abstrak}}</td>
        <td>{{$i->kata_kunci}}</td>
        <td>{{$i->nilai_angka}}</td>
        <td>{{$i->id_pd}}</td>
        <td>{{$i->id_rumpun_ilmu}}</td>
        <td>{{$i->id_stat_ta}}</td>
        <td>{{$i->id_prop_ta}}</td>
        <td>{{$i->id_nilai_mk}}</td>
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
