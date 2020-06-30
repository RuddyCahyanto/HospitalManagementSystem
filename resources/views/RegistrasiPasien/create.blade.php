@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Registrasi Pasien</strong>
  </div>

  {{-- return to method store at KelurahansController while submit button clicked --}}
  {!! Form::open(['route' => 'kelurahans.store']) !!}
    @include('pasiens.form')
  {!! Form::close() !!}

</div>
@endsection
