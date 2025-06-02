<div>
    @extends('baseUsuario')
    @section('título', 'Inicio')
    @section('contenido')
        <div id="main-landing-page" >

            {{-- Búsqueda --}}
            <section class="bg-dark p-3 mb-4" id="section-busqueda">
                <div class="container d-flex justify-content-center align-items-center">
                    <label for="search" class="me-2">Búsqueda:</label>
                    <input type="text" id="search" class="form-control w-50">
                    <button class="btn btn-primary ms-2">Búsqueda avanzada</button>
                </div>
            </section>

            {{-- Últimas noticias --}}
            <section class="mb-4">
                <h2 class="mb-3">Últimas noticias</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5>Exposición de manuscritos medievales</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5>Mesa redonda: Cine y novela. La visión de Valle-Inclán</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5>5.º Congreso internacional sobre Cervantes</h5>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Carrousel --}}
            <section>
                <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
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
                            <p><a class="btn btn-lg btn-primary" href="{{route('index')}}">Volver a inicio</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel" aria-hidden="true" src="{{asset ('assets/media/img/gatito2.jpg') }}"></img>
                        <div class="container">
                        <div class="carousel-caption">
                            <h1>Otro elemento</h1>
                            <p>Un gatito preocupado</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('index')}}">Volver a inicio</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel" aria-hidden="true" src="{{asset ('assets/media/img/gatito3.jpg') }}"></img>
                        <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Último elemento</h1>
                            <p>Gatito relajado, relajao, relajao</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('index')}}">Volver a inicio</a></p>
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
                <h3>Accede a nuestro catálogo de libros electrónicos</h3>
            </section>

            <!-- Mi cuenta -->
            <section class="mb-4 text-center">
                <h3>Mi cuenta</h3>
                <p>Consulta las salas de estudio, reserva espacios y gestiona préstamos y renovaciones.</p>
                <button class="btn btn-success">Iniciar sesión</button>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Talleres</h5>
                            <p>Descubre la variedad de talleres que ofrecemos</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Salas de estudio</h5>
                            <p>Consulta la localización y el horario de las salas de estudio</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Hemeroteca</h5>
                            <p>Accede a nuestra hemeroteca para consultar diarios y publicaciones periódicas</p>
                        </div>
                    </div>    
                </div>
            </section>
        </div>
        </div>
    @endsection
</div>
