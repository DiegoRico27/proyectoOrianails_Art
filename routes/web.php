<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});


Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/cursos', CursoController::class);

Route::resource('/docentes', DocenteController::class);


Route::resource('reservas', ReservaController::class);
use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);


Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/home', function () {
    return view('home');
})->name('home');






Route::resource('servicios', ServicioController::class);



