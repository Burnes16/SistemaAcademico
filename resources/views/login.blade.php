<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/icono.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
  <title>@yield('title', $title)</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A9E7FB;;">
    <div class="container" style="display:flex; justify-content:center;">
      <a href="#"><img src="{{ asset('img/logo.png')}}" alt="MTC" width="200px" height="170px" style="padding-left:40px;"></a>
      <h3 style="font-size:serif;">Sistema Academico</h3>
    </div>
</nav>
<div class="container">
    <div class="modal-dialog text-center">
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="{{ asset('img/user.png')}}"/>
                </div>
                <form class="col-12" method="POST" action="{{ route('home') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Roberto" name="nombre_usuario" value="{{ old('usuario') }}">
                        <label for="floatingInput">Usuario:</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contraseña_usuario" value="{{ old('contraseña') }}">
                        <label for="floatingPassword">Contraseña:</label>
                    </div>
                    <br>
                    <button class="btn btn-primary">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
  Todos los derechos reservados por la autora &copy; Grupo 02 - Calidad de Software.
</footer>
</body>
</html>