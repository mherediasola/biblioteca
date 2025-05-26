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
use App\Http\Controllers\IndexAdminController;

// ********************************************PARTE ADMINISTRADOR**************************************************

Route::get('/admin', [IndexAdminController::class, 'inicioAdmin'])->name("inicioAdmin");

//ROLES CON AJAX
Route::get('/admin/roles', [RolesController::class, 'mostrar'])->name("roles");
Route::get('/admin/roles/listar', [RolesController::class, 'listar'])->name("rolesListar");
Route::get('/admin/roles/{id}', [RolesController::class, 'buscar'])->where(array('id' => '[0-9]*'))->name("buscarRol");
Route::post('/admin/roles/insertar', [RolesController::class, 'insertar'])->name("crearRoles");
Route::post('/admin/roles/eliminar/{id}', [RolesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarRoles");

//IDIOMAS
Route::get('/admin/idiomas', [IdiomasController::class, 'mostrar'])->name("idiomas");
Route::get('/admin/idiomas/listar', [IdiomasController::class, 'listar'])->name("idiomasListar");
Route::get('/admin/idiomas/{id}', [IdiomasController::class, 'buscar'])->where(array('id' => '[0-9]*'))->name("buscarIdioma");
Route::get('/admin/idiomas/insertar', [IdiomasController::class, 'mostrarFormIns'])->name("formularioIdiomasIns");
Route::post('/admin/idiomas/insertar', [IdiomasController::class, 'insertar'])->name("crearIdioma");
Route::get('/admin/idiomas/formulario/{id}', [IdiomasController::class, 'mostrarFormEd'])->name("formularioIdiomasEd");
Route::post('/admin/idiomas/formulario/{id}', [IdiomasController::class, 'editar'])->name("editarIdioma");
Route::delete('/admin/idiomas/eliminar/{id}', [IdiomasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarIdioma");

//TIPOS
Route::get('/admin/tipos', [TiposController::class, 'mostrar'])->name("tipos");
Route::get('/admin/tipos/listar', [TiposController::class, 'listar'])->name("tiposListar");
Route::get('/admin/tipos/insertar', [TiposController::class, 'mostrarFormIns'])->name("formularioTiposIns");
Route::post('/admin/tipos/insertar', [TiposController::class, 'insertar'])->name("crearTipo");
Route::get('/admin/tipos/formulario/{id}', [TiposController::class, 'mostrarFormEd'])->name("formularioTiposEd");
Route::post('/admin/tipos/formulario/{id}', [TiposController::class, 'editar'])->name("editarTipo");
Route::delete('/admin/tipos/eliminar/{id}', [TiposController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarTipo");

//SALAS
Route::get('/admin/salas', [SalasController::class, 'mostrar'])->name("salas");
Route::get('/admin/salas/listar', [SalasController::class, 'listar'])->name("salasListar");
Route::get('/admin/salas/insertar', [SalasController::class, 'mostrarFormIns'])->name("formularioSalasIns");
Route::post('/admin/salas/insertar', [SalasController::class, 'insertar'])->name("crearSala");
Route::get('/admin/salas/formulario/{id}', [SalasController::class, 'mostrarFormEd'])->name("formularioSalasEd");
Route::post('/admin/salas/formulario/{id}', [SalasController::class, 'editar'])->name("editarSala");
Route::delete('/admin/salas/eliminar/{id}', [SalasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarSala");

//PAISES
Route::get('/admin/paises', [PaisesController::class, 'mostrar'])->name("paises");
Route::get('/admin/paises/listar', [PaisesController::class, 'listar'])->name("paisesListar");
Route::get('/admin/paises/insertar', [PaisesController::class, 'mostrarFormIns'])->name("formularioPaisesIns");
Route::post('/admin/paises/insertar', [PaisesController::class, 'insertar'])->name("crearPais");
Route::get('/admin/paises/formulario/{id}', [PaisesController::class, 'mostrarFormEd'])->name("formularioPaisesEd");
Route::post('/admin/paises/formulario/{id}', [PaisesController::class, 'editar'])->name("editarPais");
Route::delete('/admin/paises/eliminar/{id}', [PaisesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarPais");

//EDITORIALES
Route::get('/admin/editoriales', [EditorialesController::class, 'mostrar'])->name("editoriales");
Route::get('/admin/editoriales/listar', [EditorialesController::class, 'listar'])->name("editorialesListar");
Route::get('/admin/editoriales/insertar', [EditorialesController::class, 'mostrarFormIns'])->name("formularioEditorialesIns");
Route::post('/admin/editoriales/insertar', [EditorialesController::class, 'insertar'])->name("crearEditorial");
Route::get('/admin/editoriales/formulario/{id}', [EditorialesController::class, 'mostrarFormEd'])->name("formularioEditorialesEd");
Route::post('/admin/editoriales/formulario/{id}', [EditorialesController::class, 'editar'])->name("editarEditorial");
Route::delete('/admin/editoriales/eliminar/{id}', [EditorialesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarEditorial");

//USUARIOS
Route::get('/admin/usuarios', [UsuariosController::class, 'mostrar'])->name("usuarios");
Route::get('/admin/usuarios/listar', [UsuariosController::class, 'listar'])->name("usuariosListar");
Route::get('/admin/usuarios/insertar', [UsuariosController::class, 'mostrarFormIns'])->name("formularioUsuariosIns");
Route::post('/admin/usuarios/insertar', [UsuariosController::class, 'insertar'])->name("crearUsuario");
Route::get('/admin/usuarios/formulario/{id}', [UsuariosController::class, 'mostrarFormEd'])->name("formularioUsuariosEd");
Route::post('/admin/usuarios/formulario/{id}', [UsuariosController::class, 'editar'])->name("editarUsuario");
Route::delete('/admin/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarUsuario");

//MESAS
Route::get('/admin/mesas', [MesasController::class, 'mostrar'])->name("mesas");
Route::get('/admin/mesas/listar', [MesasController::class, 'listar'])->name("mesasListar");
Route::get('/admin/mesas/insertar', [MesasController::class, 'mostrarFormIns'])->name("formularioMesasIns");
Route::post('/admin/mesas/insertar', [MesasController::class, 'insertar'])->name("crearMesa");
Route::get('/admin/mesas/formulario/{id}', [MesasController::class, 'mostrarFormEd'])->name("formularioMesasEd");
Route::post('/admin/mesas/formulario/{id}', [MesasController::class, 'editar'])->name("editarMesa");
Route::delete('/admin/mesas/eliminar/{id}', [MesasController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarMesa");




//******************************************************************************************************************************************************