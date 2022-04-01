<?php

use App\Http\Controllers\AuthController;
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

Route::get('/',[
    AuthController::class,"register"
]);

Route::get('/data-register',[
    AuthController::class,"dataRegister"
]);

Route::get('/data-login',[
    AuthController::class,"loginData"
]);

Route::get('/data-insert',[
    AuthController::class,"insertData"
]);
Route::get('/login',[
    AuthController::class,"login"
]);

Route::get('/dashboard',[
    AuthController::class,"dashboard"
]);

Route::get('/insert',[
    AuthController::class,"insert"
]);

Route::get('/edit/{id}',[
    AuthController::class,"edit"
]);
Route::get('/update/{id}',[
    AuthController::class,"update"
]);
