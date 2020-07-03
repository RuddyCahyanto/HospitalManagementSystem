@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Data User</strong>
    <a href="{{ route("data-kelurahan.create") }}" class="btn btn-default pull-right" id="btnTambahData">
      <i class="glyphicon glyphicon-plus"></i>
      Tambah User
    </a>
  </div>

  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = ($dataKelurahans->currentpage()-1)* $dataKelurahans->perpage() + 1; ?>
        @foreach ($dataKelurahans as $key => $dataKelurahan)
          <tr>
            <th scope="row">{{ $nomor++ }}</th> {{-- numbering --}}
            <td>{{ $dataKelurahan->nama_kelurahan }}</td>
            <td>{{ $dataKelurahan->nama_kecamatan }}</td>
            <td>{{ $dataKelurahan->nama_kota }}</td>
            <td width="100" class="middle">
              <div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['data-kelurahan.destroy', $dataKelurahan->id]]) !!}
                  <a href="{{route('data-kelurahan.edit', $dataKelurahan->id)}}" class="btn btn-circle btn-default btn-xs" title="Edit">
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
    {!! $dataKelurahans->links() !!}
  </nav>
</div>
@endsection
