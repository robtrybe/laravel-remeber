<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

#Defindo rota usando Função Middleware
Route::get('/', function () {
    echo 'Seja Bem Vindo!';
});

#Definindo rota usando Classes
Route::get('/home',[HomeController::class,'home']);

Route::get('/contact',[\App\Http\Controllers\ContactController::class,'contact']);
