<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('spa');
});

/*Route::get('/usuario', function () {
    return view('usuario.index');
});

Route::get('/usuario/crear_usuario', [UsuarioController::class,'create']);
*/
Route::resource('usuario', UsuarioController::class);