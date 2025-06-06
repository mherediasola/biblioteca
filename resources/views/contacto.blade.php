@extends('baseUsuario')
    @section('título', 'Contacto')
    @section('contenido')

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h1 class="text-start">Biblioteca Vistasol</h1>
                <p>
                    La Biblioteca Vistasol es un espacio público diseñado para fomentar el aprendizaje y la investigación. 
                    Su colección cuenta con libros, revistas y recursos digitales especialmente seleccionados 
                    para estudiantes y académicos. Su ambiente tranquilo y sus áreas de estudio facilitan el desarrollo del conocimiento.
                </p>
                <p>
                    Ubicada en <strong>La Gangosa, Vícar</strong>, la biblioteca ofrece acceso gratuito a todos los usuarios 
                    interesados en el estudio, la lectura y la cultura.
                </p>
                <p><strong>Teléfono de contacto:</strong> +34 950 123 456</p>
                <p id="horario"><strong>Horario de apertura:</strong>  
                    La biblioteca abre de lunes a viernes de 9:00 a 20:00, y los sábados de 10:00 a 14:00.  
                    Cerrado los domingos y festivos.
                </p>
            </div>
            <div class="col-lg-5 align-content-center mb-5">
                <div class="ratio ratio-16x9">
                    <iframe src="https://maps.google.com/maps?q=La%20Gangosa,%20V%C3%ADcar&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    @endsection
