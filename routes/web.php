<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/categoria/novo', [CategoriaController::class, 'novo']);
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'editar']);
Route::get('/categoria/excluir/{id}', [CategoriaController::class, 'excluir']);
Route::post('/categoria/salvar', [CategoriaController::class, 'salvar']);

Route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia_lista');
Route::get('/noticia/novo', [NoticiaController::class, 'novo']);
Route::get('/noticia/editar/{id}', [NoticiaController::class, 'editar']);
Route::get('/noticia/salvar', [NoticiaController::class, 'salvar'])->name('noticia_salvar');
