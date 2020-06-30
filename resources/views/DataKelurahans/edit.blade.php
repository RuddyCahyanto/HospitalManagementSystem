@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Edit Data Kelurahan</strong>
  </div>

  {{-- return to method update at KelurahansController while submit button clicked --}}
  {!! Form::model($kelurahan, ['route' => ['DataKelurahans.update', $kelurahan->id], 'method' => 'PATCH']) !!}
    @include('kelurahans.form')
  {!! Form::close() !!}

</div>
@endsection
