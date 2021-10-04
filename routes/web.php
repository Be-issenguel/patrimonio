<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('poupanca')->group(function () {
    Route::get('listagem', 'PoupancaController@index');

    Route::post('cadastrar', 'PoupancaController@store');

    Route::post('editar', 'PoupancaController@update');

    Route::post('creditar', 'PoupancaController@creditar');
});

Route::prefix('rendimento')->group(function () {
    Route::get('listagem', 'RendimentoController@index');

    Route::post('cadastrar', 'RendimentoController@store');

    Route::post('editar', 'RendimentoController@update');
});


Route::prefix('despesa')->group(function () {
    Route::get('listagem', 'DespesaController@index');

    Route::post('cadastrar', 'DespesaController@store');
});
