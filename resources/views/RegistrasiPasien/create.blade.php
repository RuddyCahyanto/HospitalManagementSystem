@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Registrasi Pasien</strong>
  </div>

  {{-- return to method store at KelurahansController while submit button clicked --}}
  {!! Form::open(['route' => 'registrasi-pasien.store']) !!}
    @include('RegistrasiPasien.form')
  {!! Form::close() !!}

</div>
@endsection
