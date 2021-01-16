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

/*Route::get('events', function (){
    return '<h1>Lista de Eventos</h1>';
});

Route::get('events/{slug}', function ($slug){
    return '<h1>Evento: ' . $slug . '</h1>';
});*/

Route::get('events', [\App\Http\Controllers\EventsController::class, 'index']);

Route::get('event/{event}', [\App\Http\Controllers\EventsController::class, 'show']);
