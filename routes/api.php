<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// List Clientes
Route::get('/list-clientes', [ClientesController::class, 'index']);

// Mostra Cliente
Route::get('mostra-cliente/{id}', [ClientesController::class, 'show']);

// Cadastra Cliente
Route::post('cad-cliente', [ClientesController::class, 'store']);

// atualizar Cliente
Route::get('edit-cliente/{id}', [ClientesController::class, 'update']);

// Exclui Cliente
Route::get('del-cliente/{id}', [ClientesController::class,'destroy']);