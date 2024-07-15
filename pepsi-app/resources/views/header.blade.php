<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="navbar navbar-dark bg-primary sticky-top">
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation" onclick="abrirCerrarMenu()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ml-2" href="#">Pepsi App</a>
        </div>
        <div>
            @auth
                <div class="text-light mr-3">
                    Bienvenido, {{ Auth::user()->name }}
                </div>
            @endauth
            <a class="btn btn-outline-light ml-2" href="{{ url('/signin') }}">Iniciar Sesión</a>
            <a class="btn btn-outline-light ml-2" href="{{ url('/register') }}">Registrarse</a>
        </div>
    </nav>
    <div id="sidebar" class="sidebar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/novedades') }}">Novedades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/tienda') }}">Tienda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/carrito') }}">Carrito</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/sobre_nosotros') }}">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/ayuda') }}">Ayuda</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endauth
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
