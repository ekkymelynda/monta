@extends('layouts.dashboard')
@section('page_heading','Status Pembimbingan')
@section('section')

<div class="row">
  <div class="col-sm-12">
      @section ('cotable_panel_body')
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID status bimbingan</th>
          <th>Nama status bimbingan</th>
          <th>Create date</th>
          <th>Last update</th>
          <th>Expired date</th>
        </tr>
      </thead>
    <tbody>
        <tr>
        	@foreach ($item as $i)
          <td>{{$i->id_stat_bimbing}}</td>
          <td>{{$i->nm_stat_bimb}}</td>
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