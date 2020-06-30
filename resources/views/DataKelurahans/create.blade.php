@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Tambah Data Kelurahan</strong>
  </div>

  {{-- return to method store at KelurahansController while submit button clicked --}}
  {!! Form::open(['route' => 'DataKelurahans.store']) !!}
    @include('DataKelurahans.form')
  {!! Form::close() !!}

</div>
@endsection
