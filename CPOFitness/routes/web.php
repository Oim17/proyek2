<?php

use Illuminate\Support\Facades\Route;



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
    return view('welcome');
});

use App\Http\Controllers\PaketController;
Route::get('/paket',[PaketController::class, 'index']);
Route::get('/paket/create',[PaketController::class, 'create']);
Route::post('/paket/store',[PaketController::class, 'store']);
Route::get('/paket/edit/{id}',[PaketController::class, 'edit']);
Route::post('/paket/update/{id}',[PaketController::class, 'update']);
Route::get('/paket/destroy/{id}',[PaketController::class, 'destroy']);

use App\Http\Controllers\ArtikelController;
Route::get('/artikel',[ArtikelController::class, 'index']);
Route::get('/artikel/create',[ArtikelController::class, 'create']);
Route::post('/artikel/store',[ArtikelController::class, 'store']);
Route::get('/artikel/edit/{id}',[ArtikelController::class, 'edit']);
Route::post('/artikel/update/{id}',[ArtikelController::class, 'update']);
Route::get('/artikel/destroy/{id}',[ArtikelController::class, 'destroy']);

Route::get('/index', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
