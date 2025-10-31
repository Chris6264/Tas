<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TAS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center" href="#">
                <img src="/images/logo.png" alt="TAS" class="logo-img">
                TAS
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto justify-content-center mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{route('tas_inicio')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Subir Receta</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <a class="btn btn-accent" href="#">Iniciar Sesión</a>
                    <a class="btn btn-accent ms-3" href="#">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>

</html>
