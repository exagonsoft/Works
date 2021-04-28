<?php

use Illuminate\Support\Facades\Route;
//use App\http\Controllers\CitaController;
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
//Route::get('/citas', [CitaController::class, 'index']);
//Route::get('/citas/new', [CitaController::class, 'create']);
//Route::get('/citas/edit', [CitaController::class, 'edit']);
Route::resource('citas', CitaController::class);

