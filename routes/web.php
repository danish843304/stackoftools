<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Developerservice;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Home::class, 'index'])->name('/');
Route::get('base64_encode', [Developerservice::class, 'base64_encode'])->name('base64_encode');
Route::get('base64_decode', [Developerservice::class, 'base64_decode'])->name('base64_decode');
Route::post('encodebase64', [Developerservice::class, 'encodebase64'])->name('encodebase64');
Route::post('decodebase64', [Developerservice::class, 'decodebase64'])->name('decodebase64');