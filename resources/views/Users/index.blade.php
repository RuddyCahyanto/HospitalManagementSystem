@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Data User</strong>
    <a href="{{ route("users.create") }}" class="btn btn-default pull-right" id="btnTambahData">
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
        <?php $nomor = ($users->currentpage()-1)* $users->perpage() + 1; ?>
        @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $nomor++ }}</th> {{-- numbering --}}
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td width="100" class="middle">
              <div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                  <a href="{{route('users.edit', $user->id)}}" class="btn btn-circle btn-default btn-xs" title="Edit">
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
    {!! $users->links() !!}
  </nav>
</div>
@endsection
