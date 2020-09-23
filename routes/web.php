<?php

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
    return view('welcome');
});

Route::resource('activo', 'ActivoController');

Route::get('/activos', 'ActivoController@index');
//Route::get('activos', [ActivoController::class, 'activo']);


Route::get('/activo/create', 'ActivoController@create');
Route::post('/activo', 'ActivoController@store');
Route::get('/activo/{activo}/show', 'ActivoController@show');
Route::get('/activo/{activo}/edit', 'ActivoController@edit');
Route::put('/activo/{activo}', 'ActivoController@update');
Route::delete('/activo/{activo}', 'ActivoController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
