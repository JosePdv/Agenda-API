<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Models\Evento;

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
    return view('portal.administrativo');
})->name('welcome')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Eventos

Route::get('/eventos', function () {

    $eventos = Evento::orderBy('data', 'desc')->simplePaginate(20);

    return view('eventos.list', compact('eventos'));
})->name('eventos')->middleware('auth');

Route::get('/eventos/form/{id}/edit', function ($id) {

    $evento = Evento::where('id', $id)->first();

    return view('eventos.edit', compact('evento'));
})->name('eventos.form.edit')->middleware('auth');

Route::post('/eventos/update',[EventoController::class, 'update'])->name('eventos.update')->middleware('auth');

Route::get('/eventos/form/create', function () {
    return view('eventos.create');
})->name('eventos.form.create')->middleware('auth');

Route::post('/eventos/create',[EventoController::class, 'create'])->name('eventos.create')->middleware('auth');

Route::get('/eventos/{id}/delete',[EventoController::class, 'delete'])->name('eventos.delete')->middleware('auth');


// Fim Eventos

// API
Route::get('/eventos/api/get',[EventoController::class, 'getEventosJson']);
Route::get('/eventos/api/{id}/get',[EventoController::class, 'getEventoJson']);
Route::get('/eventos/api/get/{id}/imagem',[EventoController::class, 'getEventosImagemJson']);
// FIM API
