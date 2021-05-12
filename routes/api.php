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

            Route::GET('/consumo', 'App\Http\Controllers\ConsumoController@index');

            Route::GET('/consumo/{id}', 'App\Http\Controllers\ConsumoController@show');

            Route::POST('/consumo', 'App\Http\Controllers\ConsumoController@create');

            Route::DELETE('/consumo/{id}', 'App\Http\Controllers\ConsumoController@destroy');

            Route::PUT('/consumo/{id}', 'App\Http\Controllers\ConsumoController@update');


            
            Route::GET('/contrato', 'App\Http\Controllers\ContratoController@index');

            Route::GET('/contrato/{id}', 'App\Http\Controllers\ContratoController@show');

            Route::POST('/contrato', 'App\Http\Controllers\ContratoController@create');

            Route::DELETE('/contrato/{id}', 'App\Http\Controllers\ContratoController@destroy');

            Route::PUT('/contrato/{id}', 'App\Http\Controllers\ContratoController@update');


            Route::GET('/itinerario', 'App\Http\Controllers\ItinerarioController@index');

            Route::GET('/itinerario/{id}', 'App\Http\Controllers\ItinerarioController@show');

            Route::POST('/itinerario', 'App\Http\Controllers\ItinerarioController@create');

            Route::DELETE('/itinerario/{id}', 'App\Http\Controllers\ItinerarioController@destroy');

            Route::PUT('/itinerario/{id}', 'App\Http\Controllers\ItinerarioController@update');


            Route::GET('/manutencao', 'App\Http\Controllers\ManutencaoController@index');

            Route::GET('/manutencao/{id}', 'App\Http\Controllers\ManutencaoController@show');

            Route::POST('/manutencao', 'App\Http\Controllers\ManutencaoController@create');

            Route::DELETE('/manutencao/{id}', 'App\Http\Controllers\ManutencaoController@destroy');

            Route::PUT('/manutencao/{id}', 'App\Http\Controllers\ManutencaoController@update');


            Route::GET('/mao_de_obra', 'App\Http\Controllers\Mao_De_ObraController@index');

            Route::GET('/mao_de_obra/{id}', 'App\Http\Controllers\Mao_De_ObraController@show');

            Route::POST('/mao_de_obra', 'App\Http\Controllers\Mao_De_ObraController@create');

            Route::DELETE('/mao_de_obra/{id}', 'App\Http\Controllers\Mao_De_ObraController@destroy');

            Route::PUT('/mao_de_obra/{id}', 'App\Http\Controllers\Mao_De_ObraController@update');


            Route::GET('/pecas', 'App\Http\Controllers\PecasController@index');

            Route::GET('/pecas/{id}', 'App\Http\Controllers\PecasController@show');

            Route::POST('/pecas', 'App\Http\Controllers\PecasController@create');

            Route::DELETE('/pecas/{id}', 'App\Http\Controllers\PecasController@destroy');

            Route::PUT('/pecas/{id}', 'App\Http\Controllers\PecasController@update');


            Route::GET('/rl_contrato_veiculo', 'App\Http\Controllers\RL_Contrato_VeiculoController@index');

            Route::GET('/rl_contrato_veiculo/{id}', 'App\Http\Controllers\RL_Contrato_VeiculoController@show');

            Route::POST('/rl_contrato_veiculo', 'App\Http\Controllers\RL_Contrato_VeiculoController@create');

            Route::DELETE('/rl_contrato_veiculo/{id}', 'App\Http\Controllers\RL_Contrato_VeiculoController@destroy');

            Route::PUT('/rl_contrato_veiculo/{id}', 'App\Http\Controllers\RL_Contrato_VeiculoController@update');


            Route::GET('/td_tipo_nanutencao', 'App\Http\Controllers\TD_Tipo_ManutencaoController@index');

            Route::GET('/td_tipo_nanutencao/{id}', 'App\Http\Controllers\TD_Tipo_ManutencaoController@show');

            Route::POST('/td_tipo_nanutencao', 'App\Http\Controllers\TD_Tipo_ManutencaoController@create');

            Route::DELETE('/td_tipo_nanutencao/{id}', 'App\Http\Controllers\TD_Tipo_ManutencaoController@destroy');

            Route::PUT('/td_tipo_nanutencao/{id}', 'App\Http\Controllers\TD_Tipo_ManutencaoController@update');


            Route::GET('/td_tipo_veiculo', 'App\Http\Controllers\TD_Tipo_VeiculoController@index');

            Route::GET('/td_tipo_veiculo/{id}', 'App\Http\Controllers\TD_Tipo_VeiculoController@show');

            Route::POST('/td_tipo_veiculo', 'App\Http\Controllers\TD_Tipo_VeiculoController@create');

            Route::DELETE('/td_tipo_veiculo/{id}', 'App\Http\Controllers\TD_Tipo_VeiculoController@destroy');

            Route::PUT('/td_tipo_veiculo/{id}', 'App\Http\Controllers\TD_Tipo_VeiculoController@update');


            Route::GET('/usuario', 'App\Http\Controllers\UsuarioController@index');

            Route::GET('/usuario/{id}', 'App\Http\Controllers\UsuarioController@show');

            Route::POST('/usuario', 'App\Http\Controllers\UsuarioController@create');

            Route::DELETE('/usuario/{id}', 'App\Http\Controllers\UsuarioController@destroy');

            Route::PUT('/usuario/{id}', 'App\Http\Controllers\UsuarioController@update');


            Route::GET('/veiculo', 'App\Http\Controllers\VeiculoController@index');

            Route::GET('/veiculo/{id}', 'App\Http\Controllers\VeiculoController@show');

            Route::POST('/veiculo', 'App\Http\Controllers\VeiculoController@create');

            Route::DELETE('/veiculo/{id}', 'App\Http\Controllers\VeiculoController@destroy');

            Route::PUT('/veiculo/{id}', 'App\Http\Controllers\VeiculoController@update');


            Route::GET('/viagem', 'App\Http\Controllers\ViagemController@index');

            Route::GET('/viagem/{id}', 'App\Http\Controllers\ViagemController@show');

            Route::POST('/viagem', 'App\Http\Controllers\ViagemController@create');

            Route::DELETE('/viagem/{id}', 'App\Http\Controllers\ViagemController@destroy');

            Route::PUT('/viagem/{id}', 'App\Http\Controllers\ViagemController@update');



