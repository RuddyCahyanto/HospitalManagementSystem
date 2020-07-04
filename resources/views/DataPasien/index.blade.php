@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Data Pasien</strong>
    {{-- <a href="{{ route("users.create") }}" class="btn btn-default pull-right" id="btnTambahData">
      <i class="glyphicon glyphicon-plus"></i>
      Tambah User
    </a> --}}
  </div>

  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID Pasien</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = ($pasiens->currentpage()-1)* $pasiens->perpage() + 1; ?>
        @foreach ($pasiens as $pasien)
          <tr>
            <th scope="row">{{ $nomor++ }}</th> {{-- numbering --}}
            <td>{{ $pasien->id }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>
              {{
                $pasien->alamat.', RT '.$pasien->rt.' / RW '.$pasien->rw .', '
                .$pasien->kelurahan->nama_kelurahan.', '
                .$pasien->kelurahan->nama_kecamatan.', '
                .$pasien->kelurahan->nama_kota
              }}
            </td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->tgl_lahir }}</td>
            <td width="100" class="middle">
              <div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['registrasi-pasien.destroy', $pasien->id]]) !!}
                  <a href="{{route('registrasi-pasien.edit', $pasien->id)}}" class="btn btn-circle btn-default btn-xs" title="Edit">
                    <i class="glyphicon glyphicon-edit"></i>
                  </a>
                  @can('isAdmin')
                    <button onclick="return confirm('Apakah Anda yakin?');" type="submit" class="btn btn-circle btn-danger btn-xs" title="Hapus">
                      <i class="glyphicon glyphicon-remove"></i>
                    </button>
                  @elsecan('isOperator')
                    <button onclick="return confirm('Apakah Anda yakin?');" type="submit" class="btn btn-circle btn-danger btn-xs" title="Cetak Kartu Pasien">
                      <i class="glyphicon glyphicon-print"></i>
                    </button>
                  @endcan
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
    {!! $pasiens->links() !!}
  </nav>
</div>
@endsection
