<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/estilos.css') }}"/>
    <title>@yield('titulo')</title>
    <script src="{{ asset('/vendor/bootstrap-5.3.6/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/9f4bf3af88.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/vendor/jQuery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" /> 
</head>
<body>
    <header class="bg-secondary" id="headerUsuario">

        <!-- NavBar -->

        <nav class="navbar navbar-expand-lg usuario">
            <a href="index.html" class="navbar-brand"><img id="logo" src="{{asset ('assets/media/img/bibliotecaLogo.png') }}" alt="Logo"></a>
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Biblioteca I.E.S. La Puebla</span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#burger" name="btn-burger">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="burger">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('index')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link enlace-nav" href="#">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('obras')}}">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link enlace-nav" href="#">Contacto</a></li>
                </ul>
                <div class="sesion">
                    <a href="{{route('login')}}"><button id="btnSesion"><i class="fa-solid fa-light fa-user"></i></button></a>            
                    <button class="hamburger-icon"><label for="menu-toggle"><i class="fa-solid fa-light fa-bars"></i></i></label></button>
                </div>
            </div>
        </nav>

    </header>
    <main id="mainUsuario">
        <div>
            @yield('contenido')
        </div>
    </main>
    <footer id="footerUsuario" class="container-fluid">
        
    </footer>    
</body>
</html>
