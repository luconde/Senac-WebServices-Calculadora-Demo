<?php

use App\Http\Controllers\Api\OperacoesController;
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

Route::post('operacoes/somar', 'App\Http\Controllers\Api\OperacoesController@somar');
Route::post('operacoes/subtrair', 'App\Http\Controllers\Api\OperacoesController@subtrair');
Route::post('operacoes/dividir', 'App\Http\Controllers\Api\OperacoesController@dividir');
Route::post('operacoes/multiplicar', 'App\Http\Controllers\Api\OperacoesController@multiplicar');
Route::post('operacoes/potencializar', 'App\Http\Controllers\Api\OperacoesController@potencializar');
Route::post('operacoes/raizquadrada', 'App\Http\Controllers\Api\OperacoesController@raizquadrada');
Route::post('operacoes/raizqualquer', 'App\Http\Controllers\Api\OperacoesController@raizqualquer');