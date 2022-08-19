<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;
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
    return view('auth.login');
});

/*Route::get('/dueno', function () {
    return view('dueno.index');
});

Route::get('/dueno/create',[DuenoController::class,'create']);
*/

Route::resource('dueno', App\Http\Controllers\DuenoController::class)->middleware('auth');
Route::resource('mascota', App\Http\Controllers\MascotaController::class)->middleware('auth');
Auth::routes();

//Auth::routes(['register'=> false,'reset'=>false]); esto es en caso de eliminar el registro y olvidod de contraseña

Route::get('/home', [DuenoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
   
    Route::get('/', [DuenoController::class, 'index'])->name('home');    
});