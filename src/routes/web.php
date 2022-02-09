<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

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


Route::resource('cliente',ClienteController::class);

Route::get('/cliente/{cliente_id}/pedido/create',[PedidoController::class,'create']);
Route::get('/cliente/{cliente_id}/pedido',[PedidoController::class,'index']);
Route::get('/cliente/{cliente_id}/pedido/{pedido_id}/edit',[PedidoController::class,'edit']);
Route::patch('/cliente/{cliente_id}/pedido/{pedido_id}',[PedidoController::class,'update']);
Route::post('/cliente/{cliente_id}/pedido',[PedidoController::class,'store']);
Route::delete('/cliente/{cliente_id}/pedido/{pedido_id}',[PedidoController::class,'destroy']);