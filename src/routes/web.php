<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

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

// Route::get('/test', [TestController::class, 'index']);
Route::get('/test/{text?}', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);

// Laravel基礎 1-8 問題1
Route::get('/test/{room}/{id}', function ($room, $id) {
    return 'roomが ' . $room . ' で、idは ' . $id . ' です';
});

// Laravel基礎 1-8 問題2
Route::get('/test/{greeting?}', function ($greeting = 'goodmorning') {
    return $greeting . ' = おはようございます';
});
