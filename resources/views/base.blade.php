<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/estilos.css') }}"/>
    <title>@yield('titulo')</title>
    <script src="{{ asset('/vendor/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/9f4bf3af88.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/vendor/jQuery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" /> 
</head>
<body>
    <header>
        <img/>
        <h1>Biblioteca</h1>
    </header>
    <main>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('inicioAdmin')}}">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- @if(auth()->user())
                        @if(auth()->user()->hasRole('Administrador') || auth()->user()->hasRole('Bibliotecario')) --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Secciones
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a class="nav-item nav-link" href="{{route('ejemplares')}}">Catálogo</a></li> --}}
                                    {{-- @if(auth()->user()->hasRole('Administrador')) --}}
                                    <li><a class="dropdown-item" href="{{route('roles')}}">Roles</a></li>
                                    {{-- <li><a class="dropdown-item" href="{{route('usuarios')}}">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="{{route('prestamos')}}">Préstamos</a></li>
                                    <li><a class="dropdown-item" href="{{route('dashboard')}}">Estadísticas</a></li> --}}
                                    {{-- @else --}}
                                    {{-- <li><a class="dropdown-item" href="{{route('prestamos')}}">Préstamos</a></li> --}}
                                    {{-- @endif --}}
                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mi cuenta</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión</a></li>
                                </ul>
                            </li> --}}
                        {{-- @else --}}
                            {{-- <li><a class="nav-item nav-link" href="{{route('ejemplares')}}">Catálogo</a></li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mi cuenta</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('misPrestamos')}}">Mis préstamos</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión</a></li>
                            </ul>
                            </li> --}}
                        {{-- @endif
                    @else --}}
                        {{-- <li><a class="nav-item nav-link" href="{{route('ejemplares')}}">Catálogo</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mi cuenta</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('formularioRegistro')}}">Registrarse</a></li>
                                <li><a class="dropdown-item" href="{{route('login')}}">Iniciar sesión</a></li>
                            </ul>
                            </li> --}}
                {{-- @endif
                    @if(auth()->user()) --}}
                        {{-- <li class="nav-item "><a class="nav-link" href="#">Bienvenido, {{auth()->user()->nombre}}</a></li> --}}
                    {{-- @endif --}}
                </ul>
                </div>
            </div>
        </nav>
        <div>
            @yield('contenido')
        </div>
    </main>
    <footer>
        <div>Margarita Heredia Sola</div>
        <div>2ºDAW</div>
    </footer>    
</body>
</html>