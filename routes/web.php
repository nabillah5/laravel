<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admisController;
use App\Http\Controllers\tokosController;
use App\Http\Controllers\barangsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/tables',[admisController::class, 'index']);

Route::get('/shop',[tokosController::class, 'index']);

Route::get('/user',[barangsController::class, 'index']);

Route::get('/notifications', function () {
    return view('notifications');
});


#Route::get('/user','NavController@user'); 