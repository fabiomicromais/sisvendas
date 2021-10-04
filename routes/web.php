<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
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
Route::get('/clientes/index', [ClienteController::class, 'index']);
Route::get('/clientes/create', [ClienteController::class,'create']);
Route::get('/clientes/show/{id}', [ClienteController::class, 'show']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::post('/clientes/store',  [ClienteController::class,'store'])->name('store');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('update');
