<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\SalasController;
use App\Http\Controllers\PaisesController; 
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\EjemplaresController;
use App\Http\Controllers\ObrasAutoresController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\NavegacionController;


// ***************************************** INICIO SESIÓN / REGISTRO **************************************************

//LOGGIN Y REGISTRARSE
Route::get('/login', [SesionController::class, 'mostrar'])->name('login');
Route::post('/login', [SesionController::class, 'iniciarSesion']);
Route::get('/registro', [SesionController::class, 'mostrarRegistro'])->name('formularioRegistro');
Route::post('/registro', [SesionController::class, 'registro'])->name('registro');

// ******************************************** PARTE USUARIO **********************************************************

Route::get('/', [IndexController::class, 'inicio'])->name('index');
Route::get('/admin/obras', [ObrasController::class, 'mostrar'])->name("obras");
Route::get('/contacto', [NavegacionController::class, 'contacto'])->name("contacto");
Route::get('/servicios', [NavegacionController::class, 'servicios'])->name("servicios");

Route::middleware('auth')->group(function() {
    //CERRAR SESIÓN
    Route::get('/logout', [SesionController::class, 'cerrarSesion'])->name('logout');

    Route::get('/noPermitido', [NavegacionController::class, 'noPermitido'])->name("noPermitido");
});

// ********************************************PARTE ADMINISTRADOR*******************************************************

Route::middleware(['auth', 'rol:admin'])->group(function() {
    //ROLES CON AJAX
    Route::get('/admin/roles', [RolesController::class, 'mostrar'])->name("roles");
    Route::get('/admin/roles/api/listar', [RolesController::class, 'listar'])->name("rolesListar");
    Route::get('/admin/roles/{id}', [RolesController::class, 'buscar'])->where(array('id' => '[0-9]*'))->name("buscarRol");
    Route::post('/admin/roles/insertar', [RolesController::class, 'insertar'])->name("crearRoles");
    Route::get('/roles/editar/{id}', [RolesController::class, 'mostrarEditar'])->where(array('id' => '[0-9]*'))->name("mostrarEditarRoles");
    Route::post('/roles/editar/{id}', [RolesController::class, 'editar'])->where(array('id' => '[0-9]*'));
    Route::delete('/admin/roles/eliminar/{id}', [RolesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarRoles");

    //USUARIOS
    Route::get('/admin/usuarios', [UsuariosController::class, 'mostrar'])->name("usuarios");
    //Route::get('/admin/usuarios/api/listar', [UsuariosController::class, 'listar'])->name("usuariosListar");
    Route::get('/admin/usuarios/insertar', [UsuariosController::class, 'mostrarFormIns'])->name("formularioUsuariosIns");
    Route::post('/admin/usuarios/insertar', [UsuariosController::class, 'insertar'])->name("crearUsuario");
    Route::get('/admin/usuarios/formulario/{id}', [UsuariosController::class, 'mostrarFormEd'])->name("formularioUsuariosEd");
    Route::post('/admin/usuarios/formulario/{id}', [UsuariosController::class, 'editar'])->name("editarUsuario");
    Route::delete('/admin/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarUsuario");

});


Route::middleware(['auth', 'rol:bibliotecario,admin'])->group(function (){
    //INICIO ADMINISTRADOR/BIBLIOTECARIO
    Route::get('/admin', [IndexAdminController::class, 'inicioAdmin'])->name("inicioAdmin");
    Route::get('/admin/dashboard', [ObrasController::class, 'dashboard'])->name('dashboard');
    //IDIOMAS
    Route::get('/admin/idiomas', [IdiomasController::class, 'mostrar'])->name("idiomas");
    Route::get('/admin/idiomas/api/listar', [IdiomasController::class, 'listar'])->name("idiomasListar");
    Route::get('/admin/idiomas/{id}', [IdiomasController::class, 'buscar'])->where(array('id' => '[0-9]*'))->name("buscarIdioma");
    Route::get('/admin/idiomas/insertar', [IdiomasController::class, 'mostrarFormIns'])->name("formularioIdiomasIns");
    Route::post('/admin/idiomas/insertar', [IdiomasController::class, 'insertar'])->name("crearIdioma");
    Route::get('/admin/idiomas/formulario/{id}', [IdiomasController::class, 'mostrarFormEd'])->name("formularioIdiomasEd");
    Route::post('/admin/idiomas/formulario/{id}', [IdiomasController::class, 'editar'])->name("editarIdioma");
    Route::delete('/admin/idiomas/eliminar/{id}', [IdiomasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarIdioma");

    //TIPOS
    Route::get('/admin/tipos', [TiposController::class, 'mostrar'])->name("tipos");
    Route::get('/admin/tipos/api/listar', [TiposController::class, 'listar'])->name("tiposListar");
    Route::get('/admin/tipos/insertar', [TiposController::class, 'mostrarFormIns'])->name("formularioTiposIns");
    Route::post('/admin/tipos/insertar', [TiposController::class, 'insertar'])->name("crearTipo");
    Route::get('/admin/tipos/formulario/{id}', [TiposController::class, 'mostrarFormEd'])->name("formularioTiposEd");
    Route::post('/admin/tipos/formulario/{id}', [TiposController::class, 'editar'])->name("editarTipo");
    Route::delete('/admin/tipos/eliminar/{id}', [TiposController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarTipo");

    //SALAS
    Route::get('/admin/salas', [SalasController::class, 'mostrar'])->name("salas");
    Route::get('/admin/salas/api/listar', [SalasController::class, 'listar'])->name("salasListar");
    Route::get('/admin/salas/insertar', [SalasController::class, 'mostrarFormIns'])->name("formularioSalasIns");
    Route::post('/admin/salas/insertar', [SalasController::class, 'insertar'])->name("crearSala");
    Route::get('/admin/salas/formulario/{id}', [SalasController::class, 'mostrarFormEd'])->name("formularioSalasEd");
    Route::post('/admin/salas/formulario/{id}', [SalasController::class, 'editar'])->name("editarSala");
    Route::delete('/admin/salas/eliminar/{id}', [SalasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarSala");

    //PAISES
    Route::get('/admin/paises', [PaisesController::class, 'mostrar'])->name("paises");
    Route::get('/admin/paises/api/listar', [PaisesController::class, 'listar'])->name("paisesListar");
    Route::get('/admin/paises/insertar', [PaisesController::class, 'mostrarFormIns'])->name("formularioPaisesIns");
    Route::post('/admin/paises/insertar', [PaisesController::class, 'insertar'])->name("crearPais");
    Route::get('/admin/paises/formulario/{id}', [PaisesController::class, 'mostrarFormEd'])->name("formularioPaisesEd");
    Route::post('/admin/paises/formulario/{id}', [PaisesController::class, 'editar'])->name("editarPais");
    Route::delete('/admin/paises/eliminar/{id}', [PaisesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarPais");

    //EDITORIALES
    Route::get('/admin/editoriales', [EditorialesController::class, 'mostrar'])->name("editoriales");
    Route::get('/admin/editoriales/api/listar', [EditorialesController::class, 'listar'])->name("editorialesListar");
    Route::get('/admin/editoriales/insertar', [EditorialesController::class, 'mostrarFormIns'])->name("formularioEditorialesIns");
    Route::post('/admin/editoriales/insertar', [EditorialesController::class, 'insertar'])->name("crearEditorial");
    Route::get('/admin/editoriales/formulario/{id}', [EditorialesController::class, 'mostrarFormEd'])->name("formularioEditorialesEd");
    Route::post('/admin/editoriales/formulario/{id}', [EditorialesController::class, 'editar'])->name("editarEditorial");
    Route::delete('/admin/editoriales/eliminar/{id}', [EditorialesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarEditorial");

    //MESAS
    Route::get('/admin/mesas', [MesasController::class, 'mostrar'])->name("mesas");
    Route::get('/admin/mesas/api/listar', [MesasController::class, 'listar'])->name("mesasListar");
    Route::get('/admin/mesas/insertar', [MesasController::class, 'mostrarFormIns'])->name("formularioMesasIns");
    Route::post('/admin/mesas/insertar', [MesasController::class, 'insertar'])->name("crearMesa");
    Route::get('/admin/mesas/formulario/{id}', [MesasController::class, 'mostrarFormEd'])->name("formularioMesasEd");
    Route::post('/admin/mesas/formulario/{id}', [MesasController::class, 'editar'])->name("editarMesa");
    Route::delete('/admin/mesas/eliminar/{id}', [MesasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarMesa");

    //AUTOR
    Route::get('/admin/autores', [AutoresController::class, 'mostrar'])->name("autores");
    Route::get('/admin/autores/api/listar', [AutoresController::class, 'listar'])->name("autoresListar");
    Route::get('/admin/autores/insertar', [AutoresController::class, 'mostrarFormIns'])->name("formularioAutoresIns");
    Route::post('/admin/autores/insertar', [AutoresController::class, 'insertar'])->name("crearAutor");
    Route::get('/admin/autores/formulario/{id}', [AutoresController::class, 'mostrarFormEd'])->name("formularioAutoresEd");
    Route::post('/admin/autores/formulario/{id}', [AutoresController::class, 'editar'])->name("editarAutor");
    Route::delete('/admin/autores/eliminar/{id}', [AutoresController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarAutor");

    //OBRA
    //Route::get('/admin/obras', [ObrasController::class, 'mostrar'])->name("obras");
    Route::get('/admin/obras/api/listar', [ObrasController::class, 'listar'])->name("obrasListar");
    Route::get('/admin/obras/insertar', [ObrasController::class, 'mostrarFormIns'])->name("formularioObrasIns");
    Route::post('/admin/obras/insertar', [ObrasController::class, 'insertar'])->name("crearObra");
    Route::get('/admin/obras/formulario/{id}', [ObrasController::class, 'mostrarFormEd'])->name("formularioObrasEd");
    Route::post('/admin/obras/formulario/{id}', [ObrasController::class, 'editar'])->name("editarObra");
    Route::delete('/admin/obras/eliminar/{id}', [ObrasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarObra");

    //EJEMPLAR
    Route::get('/admin/ejemplares', [EjemplaresController::class, 'mostrar'])->name("ejemplares");
    Route::get('/admin/ejemplares/api/listar', [EjemplaresController::class, 'listar'])->name("ejemplaresListar");
    Route::get('/admin/ejemplares/insertar', [EjemplaresController::class, 'mostrarFormIns'])->name("formularioEjemplaresIns");
    Route::post('/admin/ejemplares/insertar', [EjemplaresController::class, 'insertar'])->name("crearEjemplar");
    Route::get('/admin/ejemplares/formulario/{id}', [EjemplaresController::class, 'mostrarFormEd'])->name("formularioEjemplaresEd");
    Route::post('/admin/ejemplares/formulario/{id}', [EjemplaresController::class, 'editar'])->name("editarEjemplar");
    Route::delete('/admin/ejemplares/eliminar/{id}', [EjemplaresController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarEjemplar");

    //OBRAS ESCRITAS POR AUTORES
    Route::get('/admin/obras-autores', [ObrasAutoresController::class, 'mostrar'])->name("obrasAutores");
    //Route::get('/admin/obras-autores/api/listar', [ObrasAutoresController::class, 'listar'])->name("obrasAutoresListar");
    Route::get('/admin/obras-autores/insertar', [ObrasAutoresController::class, 'mostrarFormIns'])->name("formularioObrasAutoresIns");
    Route::post('/admin/obras-autores/insertar', [ObrasAutoresController::class, 'insertar'])->name("crearObrasAutores");
    Route::get('/admin/obras-autores/formulario/{id}', [ObrasAutoresController::class, 'mostrarFormEd'])->name("formularioObrasAutoresEd");
    Route::post('/admin/obras-autores/formulario/{id}', [ObrasAutoresController::class, 'editar'])->name("editarObraAutor");
    Route::delete('/admin/obras-autores/eliminar/{id}', [ObrasAutoresController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarObraAutor");

    //PRÉSTAMOS
    Route::get('/admin/prestamos', [PrestamosController::class, 'mostrar'])->name("prestamos");
    //Route::get('/admin/prestamos/api/listar', [PrestamosController::class, 'listar'])->name("prestamosListar");
    Route::get('/admin/prestamos/insertar', [PrestamosController::class, 'mostrarFormIns'])->name("formularioPrestamosIns");
    Route::post('/admin/prestamos/insertar', [PrestamosController::class, 'insertar'])->name("crearPrestamo");
    Route::get('/admin/prestamos/formulario/{id}', [PrestamosController::class, 'mostrarFormEd'])->name("formularioPrestamosEd");
    Route::post('/admin/prestamos/formulario/{id}', [PrestamosController::class, 'editar'])->name("editarPrestamo");
    Route::delete('/admin/prestamos/eliminar/{id}', [PrestamosController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarPrestamo");

    //RESERVAS
    Route::get('/admin/reservas', [ReservasController::class, 'mostrar'])->name("reservas");
    //Route::get('/admin/reservas/api/listar', [ReservasController::class, 'listar'])->name("reservasListar");
    Route::get('/admin/reservas/insertar', [ReservasController::class, 'mostrarFormIns'])->name("formularioReservasIns");
    Route::post('/admin/reservas/insertar', [ReservasController::class, 'insertar'])->name("crearReservas");
    Route::get('/admin/reservas/formulario/{id}', [ReservasController::class, 'mostrarFormEd'])->name("formularioReservasEd");
    Route::post('/admin/reservas/formulario/{id}', [ReservasController::class, 'editar'])->name("editarReserva");
    Route::delete('/admin/reservas/eliminar/{id}', [ReservasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarReserva");

});
//******************************************************************************************************************************************************