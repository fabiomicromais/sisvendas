<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
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

Route::get('/',function(){
   return view('welcome',['view'=>"teste"]);
});
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clienteindex');
Route::get('/clientes/create', [ClienteController::class,'create']);
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::post('/clientes/store',  [ClienteController::class,'store'])->name('store');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('update');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco']);


Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::get('/endereco/create/{id}', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('enderecostore');

