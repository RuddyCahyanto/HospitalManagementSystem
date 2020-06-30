@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Edit Data Kelurahan</strong>
  </div>

  {{-- return to method update at KelurahansController while submit button clicked --}}
  {!! Form::model($dataKelurahan, ['route' => ['data-kelurahan.update', $dataKelurahan->id], 'method' => 'PATCH']) !!}
    @include('DataKelurahan.form')
  {!! Form::close() !!}

</div>
@endsection
