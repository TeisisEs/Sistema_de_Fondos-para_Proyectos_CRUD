<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});



// Página de inicio apunta al listado de proyectos
Route::get('/', [ProyectoController::class, 'index'])->name('home');

// Rutas CRUD para proyectos
Route::resource('proyectos', ProyectoController::class);

// Ruta para generar PDF
Route::get('/proyectos.pdf', [ProyectoController::class, 'generarPDF'])->name('proyectos.pdf');







