<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index'); //mostrar articulos
Route::get('/usuarios', 'App\Http\Controllers\user@index'); //mostrar articulos
Route::get('/articulos/{id}', 'App\Http\Controllers\ArticuloController@show'); //mostrar articulos
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store'); // almacenar articulos
Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloController@update'); // actualizar datos
Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloController@destroy'); //
Route::delete('/usuarios_delete/{id}','App\Http\Controllers\user@destroy');
