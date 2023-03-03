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

Route::get('/parceiros', function () {
    return view('parceiros');
}); 

Route::get('/teste', function () {
    return view('teste');
}); 
Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/graficos', function () {
    return view('graficos');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
