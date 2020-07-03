<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="/assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand text-uppercase" href="#">
            Sistem Informasi Manajemen Rumah Sakit
          </a>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Home
              <span class="badge"></span>
            </a>
            <a href="#" class="list-group-item">
              Data User
              <span class="badge">{{ App\Domain\Users\Models\User::count() }}</span>
            </a>
            <a href="#" class="list-group-item">
              Data Kelurahan
              <span class="badge">{{ App\Domain\DataKelurahan\Models\DataKelurahan::count() }}</span>
            </a>
            <a href="#" class="list-group-item">
              Data Pasien
              <span class="badge">{{ App\Domain\RegistrasiPasien\Models\RegistrasiPasien::count() }}</span>
            </a>

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



    {{-- <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jasny-bootstrap.min.js"></script>
    <script>
    $("#add-new-group").hide();
    $('#add-group-btn').click(function () {
      $("#add-new-group").slideToggle(function() {
        $('#new_group').focus();
      });
      return false;
    });
    </script> --}}
  </body>
</html>
