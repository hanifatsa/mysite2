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

//127.0.0.1:8000/hani ==> <h1>HALO SAYA HANI</h1>
Route::get('/hani', function () {
    return "<h1>HALO SAYA HANI</h1>";
});
  