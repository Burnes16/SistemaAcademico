<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login', ['title' => 'SA - Iniciar Sesion']);
});

Route::get('/home', [UserController::class, 'principal'])->name('principal');
Route::post('/home', [UserController::class, 'login'])->name('home');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/cursos/{coddocente}', [CursoController::class, 'index'])->name('cursos');


Route::get('/matricula/{coddocente}/{codcurso}/{codbimestre}', [CursoController::class, 'matricula'])->name('matricula');

Route::post('/registro', [CursoController::class, 'registro'])->name('registro');