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

//Route::resource('registro', RegistroController::class, ['except' => ['index']]);
//Route::resource('usuario', UsuarioController::class, ['except' => ['update','destroy', 'show', 'edit']]);

Route::get('/', [UsuarioController::class, 'index'])->name('login');
//Inserir action para autenticação de usuário
Route::get('/cadastrar', [UsuarioController::class, 'create'])->name('cadastrar');
Route::post('/cadastrar.store', [UsuarioController::class, 'store'])->name('cadastrar.usuario');


Route::get('/formulario', [RegistroController::class, 'create'])->name('cadastrar.curriculo');
Route::post('/formulario.store', [RegistroController::class, 'store'])->name('enviar'); 
Route::get('/editar/{id?}', [RegistroController::class, 'edit'])->name('editar'); 
Route::post('/atualizar/{id?}', [RegistroController::class, 'update'])->name('atualizaProduto');
Route::get('/curriculos', [RegistroController::class, 'show'])->name('curriculos');
Route::get('/deletar/{id?}', [RegistroController::class, 'destroy'])->name('deletar');

//Falta inserir: update, destroy

