<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" /> 
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/estilos.css') }}"/>
    <title>@yield('titulo')</title>
    <script src="{{ asset('/vendor/bootstrap-5.3.6/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/9f4bf3af88.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/vendor/jQuery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header id="headerUsuario">

        <!-- NavBar -->
        <div class="container">
            <div class="row d-flex justify-content-space-around">
                <nav class="navbar navbar-expand-lg usuario">
                    <div class="d-flex justify-content-start">
                        <a href="{{route('index')}}" class="navbar-brand"><img id="logo" src="{{asset('assets/media/img/bibliotecaLogo.png')}}" alt="Logo"></a>
                        <div class="navbar-brand mb-0 align-self-center">Biblioteca Vistasol</div>
                    </div>
                    <div class="d-flex justify-content-md-end m-3">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#burger">
                            <i class="fa-solid fa-light fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end align-content-center" id="burger">
                        <ul class="navbar-nav p-0 m-0">
                            <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('index')}}">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('servicios')}}">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('obras')}}">Catálogo</a></li>   
                            <li class="nav-item"><a class="nav-link enlace-nav" href="#">Reservas</a></li>   
                            <li class="nav-item"><a class="nav-link enlace-nav" href="{{route('contacto')}}">Contacto</a></li>
                            @if(auth()->user())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{route('login')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hola, {{auth()->user()->name}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Mis datos</a></li>
                                        <li><a class="dropdown-item" href="#">Mis reservas</a></li>
                                        <li><a class="dropdown-item" href="#">Mis préstamos</a></li>
                                        <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión</a></li>
                                    </ul>
                                </li> 
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-light fa-user"></i></a></li>
                                </li>  
                            @endif           
                        </ul>
                    </div>
                </nav>
            </div>  
        </div>
        

    </header>
    <main id="mainUsuario">
        <div>
            @yield('contenido')
        </div>
    </main>
    <footer id="footerUsuario" class="container-fluid justify-content-center">
        <div class="row m-0">
            <div class="col-12 col-md-3">
                <a href="{{route('index')}}" class="navbar-brand"><img id="logo-footer" src="{{asset('assets/media/img/bibliotecaLogo.png')}}" alt="Logo" ></a>
                <h3 class="navbar-brand mb-0 text-center">Biblioteca Vistasol</h3>
            </div>

            <div class="col-12 col-md-3 mt-3">
                <p><a href="{{route('contacto')}}" class="link-underline link-underline-opacity-0 enlace-footer">
                    Contacto
                </a></p>
                <p><a href="{{route('contacto')}}#horario" class="link-underline link-underline-opacity-0 enlace-footer">
                    Horario de apertura
                </a></p>
            </div>

            <div class="col-12 col-md-3 mt-3">
                <p><a href="#" class="link-underline link-underline-opacity-0 enlace-footer">
                    Suscríbete a nuestro boletín de noticias
                </a></p>
                <p><a href="#" class="p-0 link-underline link-underline-opacity-0 enlace-footer">
                    Redes sociales:
                </a></p>
                <div class="row justify-content-center p-0">
                    <div class="col-3">
                        <a href="#" class="link-underline link-underline-opacity-0 enlace-footer">
                            <i class="fa-brands fa-x-twitter fa-2x icono-redes"></i>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="" class="link-underline link-underline-opacity-0 enlace-footer">
                            <i class="fa-brands fa-instagram fa-2x icono-redes"></i>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="" class="link-underline link-underline-opacity-0 enlace-footer">
                            <i class="fa-brands fa-facebook fa-2x icono-redes"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-3">
                <p><a href="#" class="link-underline link-underline-opacity-0 enlace-footer">
                    Política de privacidad
                </a></p>
                <p><a href="#" class="link-underline link-underline-opacity-0 enlace-footer">
                    Aviso legal
                </a></p>
                <p><a href="#" class="link-underline link-underline-opacity-0 enlace-footer">
                    Declaración de accesibilidad
                </a></p>
            </div>
        </div>
    </footer>
    @yield('js')    
</body>
</html>
