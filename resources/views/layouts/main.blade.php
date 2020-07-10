<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIMRS</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="/assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
              Sistem Informasi Manajemen Rumah Sakit
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              @guest
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
              @endguest
            </ul>
          </div>


      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="\home" class="list-group-item {{ request()->is('home') ? 'active' : '' }}">
              Home
              <span class="badge"></span>
            </a>
            @can('isAdmin')
              <a href="{{ route('users.index') }}" class="{{ (request()->segment(1) == 'users') ? 'active' : '' }} list-group-item">
                Data User
                <span class="badge">{{ App\Domain\Users\Models\User::count() }}</span>
              </a>
              <a href="{{ route('data-kelurahan.index') }}" class="{{ (request()->segment(1) == 'data-kelurahan') ? 'active' : '' }} list-group-item">
                Data Kelurahan
                <span class="badge">{{ App\Domain\DataKelurahan\Models\DataKelurahan::count() }}</span>
              </a>
              <a href="{{ route('data-pasien') }}" class="{{ (request()->segment(1) == 'data-pasien' ) ? 'active' : '' }} list-group-item">
                Data Pasien
                <span class="badge">{{ App\Domain\RegistrasiPasien\Models\RegistrasiPasien::count() }}</span>
              </a>
            @elsecan('isOperator')
              <a href="{{ route('registrasi-pasien.create') }}" class="{{ (request()->segment(1) == 'registrasi-pasien') ? 'active' : '' }} list-group-item">
                Registrasi Pasien
              </a>
              <a href="{{ route('data-pasien') }}" class="{{ (request()->segment(1) == 'data-pasien') ? 'active' : '' }} list-group-item">
                Data Pasien
                <span class="badge">{{ App\Domain\RegistrasiPasien\Models\RegistrasiPasien::count() }}</span>
              </a>
            @endcan

          </div>
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
          {{-- if there is saved message in session, return the message to the screen --}}
          @if (session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
          @endif

          {{-- content section --}}
          @yield('content')
        </div>
      </div>
    </div>

  </body>
</html>
