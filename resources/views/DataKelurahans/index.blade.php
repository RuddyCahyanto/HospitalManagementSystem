@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Data Kelurahan</strong>
    <a href="{{ route("kelurahans.create") }}" class="btn btn-default pull-right" id="btnTambahData">
      <i class="glyphicon glyphicon-plus"></i>
      Tambah Data
    </a>
  </div>
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Kelurahan</th>
          <th scope="col">Nama Kecamatan</th>
          <th scope="col">Nama Kabupaten/Kota</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kelurahans as $kelurahan)
          <tr>
            <th scope="row">{{ $kelurahan->id }}</th> {{-- numbering --}}
            <td>{{ $kelurahan->nama_kelurahan }}</td>
            <td>{{ $kelurahan->nama_kecamatan }}</td>
            <td>{{ $kelurahan->nama_kota }}</td>
            <td width="100" class="middle">
              <div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['kelurahans.destroy', $kelurahan->id]]) !!}
                  <a href="{{route('DataKelurahans.edit', $kelurahan->id)}}" class="btn btn-circle btn-default btn-xs" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                  </a>
                  <button onclick="return confirm('Apakah Anda yakin?');" type="submit" class="btn btn-circle btn-danger btn-xs" title="Hapus">
                    <i class="glyphicon glyphicon-remove"></i>
                  </button>
                  {!! Form::close() !!}
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{-- pagination --}}
<div class="panel-footer text-center">
  <nav>
    {!! $kelurahans->links() !!}
  </nav>
</div>
@endsection
