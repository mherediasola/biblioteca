    @extends('baseUsuario')
    @section('título', 'Inicio')
    @section('contenido')
        <div id="main-landing-page" >

            {{-- Búsqueda PONER COMO FORMULARIO--}}
            <section class="bg-dark p-3 mb-4" id="section-busqueda">
                <div class="row justify-content-center align-items-center">
                    <form action="" method="" class="d-flex justify-content-center align-items-center">
                        @csrf
                        <label for="search" class="me-2">Búsqueda:</label>
                        <input type="text" id="search" class="form-control w-50">
                        <button class="btn secondary btn-secondary ms-2">Búsqueda avanzada</button>
                    </form>
                </div>
            </section>

            {{-- Últimas noticias --}}
            <section class="mb-4">
                <h2 class="m-3 h2">Últimas noticias</h2>
                <div class="row justify-content-around">
                    <div class="col-sm-3 mb-3 mb-sm-0 card-noticia text-center" >
                        <div class="p-3">
                            <h5>
                                <a href="#" class="link-success link-underline-opacity-0">
                                    Exposición de manuscritos medievales
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0 card-noticia text-center">
                        <div class="p-3">
                            <h5>   
                                <a href="#" class="link-success link-underline-opacity-0">
                                    Mesa redonda: Cine y novela. La visión de Valle-Inclán
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0 card-noticia text-center" >
                        <div class="p-3">
                            <h5>
                                <a href="#" class="link-success link-underline-opacity-0">
                                    5.º Congreso internacional sobre Cervantes
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Carrousel --}}
            <section>
                <div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-carrousel" aria-hidden="true" src="{{asset ('assets/media/img/gatito1.jpg') }}"></img>                <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Carrusel</h1>
                            <p class="opacity-75">Un gatito aventurero</p>
                            <p><a class="btn btn-lg btn-secondary" href="{{route('index')}}">Volver a inicio</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel" aria-hidden="true" src="{{asset ('assets/media/img/gatito2.jpg') }}"></img>
                        <div class="container">
                        <div class="carousel-caption">
                            <h1>Otro elemento</h1>
                            <p>Un gatito preocupado</p>
                            <p><a class="btn btn-lg btn-secondary" href="{{route('index')}}">Volver a inicio</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel" aria-hidden="true" src="{{asset ('assets/media/img/gatito3.jpg') }}"></img>
                        <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Último elemento</h1>
                            <p>Gatito relajado, relajao, relajao</p>
                            <p><a class="btn btn-lg btn-secondary" href="{{route('index')}}">Volver a inicio</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            

            {{-- Catálogo electrónico --}}
             <section class="text-center mb-4">
                <h5>
                    <a href="" class="link-success link-underline-opacity-0">
                    Accede a nuestro catálogo de libros electrónicos
                    </a>
                </h5>
            </section>

            <!-- Mi cuenta -->
            <section class="mb-4 text-center">
                <div class="mb-3">
                    <div class="row g-0 align-items-center fila-cuenta">
                        <div class="col-8">
                            <img src="{{asset ('assets/media/img/chica-biblioteca.jpg') }}" class="img-fluid d-none d-md-flex" alt="Chica leyendo en una biblioteca">
                        </div>
                        <div  class="col-12 col-md-4 m-3 m-md-0">
                            <div class="text-center">
                                <h3 class="mb-4">Mi cuenta</h3>
                                <p class="m-3">Consulta las salas de estudio, reserva espacios y gestiona préstamos y renovaciones.</p>
                                <a href="{{route('login')}}"><button class="btn btn-primary mb-2">Iniciar sesión</button></a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </section>

            {{-- TARJETAS --}}

            <section>
                <div class="container">
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3 mb-3 mt-3 mb-sm-0">
                            <div class="card tarjeta">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{route('servicios')}}#talleres" class="link link-underline-opacity-0 enlace-card">
                                            Talleres
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        Descubre la variedad de talleres que ofrecemos
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 mt-3 mb-sm-0">
                            <div class="card tarjeta">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#" class="link link-underline-opacity-0 enlace-card">
                                            Salas de estudio
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        Consulta la localización y el horario de las salas de estudio
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 mt-3 mb-sm-0">
                            <div class="card tarjeta">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#" class="link link-underline-opacity-0 enlace-card">
                                            Hemeroteca
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        Accede a nuestra hemeroteca para consultar diarios y publicaciones periódicas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </section>
        </div>
    @endsection
    @section('js')
        <script>
            //CAMBIAR RUTA Y PONER UNA DIFERENTE PARA CADA TARJETA
            $(document).ready(function(){
                $(".tarjeta").click(function(){
                    window.location.href = "{{route('login')}}";
                });
            });

        </script>
    @endsection