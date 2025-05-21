<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\IndexAdminController;


Route::get('/admin', [IndexAdminController::class, 'inicioAdmin'])->name("inicioAdmin");

Route::get('/admin/roles', [RolesController::class, 'mostrar'])->name("roles");
Route::get('/admin/roles/listar', [RolesController::class, 'listar'])->name("rolesListar");
Route::get('/admin/roles/{id}', [RolesController::class, 'buscar'])->where(array('id' => '[0-9]*'))->name("buscarRol");
Route::post('/admin/roles/insertar', [RolesController::class, 'insertar'])->name("crearRoles");
Route::post('/admin/roles/eliminar/{id}', [RolesController::class, 'eliminar'])->where(array('id' => '[0-9]*'))->name("eliminarRoles");