<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("lista", "PartidasController@detalhes_partidas")->name("lista");

Route::get("cadastrar", "CadastrarController@index")->name("cadastrar");

Route::get("pontos", "JogadoresController@pontos")->name("pontos");


Route::post("jogador", "JogadoresController@create")->name("jogador");

Route::post('partidaJogador', 'PartidasController@create')->name("partidaJogador");

Route::get('partida', 'PartidasController@index')->name("partida");

Route::post("final", "JogadoresController@pontos_final")->name("final");

