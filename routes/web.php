<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;

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

Route::resource('registro', RegistroController::class, ['except' => ['index']]);
Route::resource('usuario', UsuarioController::class, ['except' => ['update','destroy', 'show', 'edit']]);

Route::get('/', [UsuarioController::class, 'index']);
//Inserir action para autenticação de usuário
Route::get('/cadastrar', [UsuarioController::class, 'create']);
Route::post('/cadastrar.store', [UsuarioController::class, 'store']);


Route::get('/formulario', [RegistroController::class, 'create']);
Route::post('/formulario.store', [RegistroController::class, 'store']) ; //enctype="multipart/form-data"
Route::post('/atualizar/{id?}/edit', [RegistroController::class, 'edit']); //enctype="multipart/form-data"
//Route::get('/atualizar/{id?}', [RegistroController::class, 'show']);
Route::delete('/registro/{id}', [RegistroController::class, 'destroy']);

//Falta inserir: show, update, destroy

