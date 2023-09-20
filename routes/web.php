<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/test', function () {return view('testing');});

Route::get('/data_perpustakaan', [BukuController::class,'index']);

Route::get('/data_perpustakaan/create', [BukuController::class,'create'])->name('membuat_data');

Route::post('/data_perpustakaan', [BukuController::class,'store'])->name('menyimpan_data');

Route::post('/data_perpustakaan/delete/{id}', [BukuController::class,'destroy'])->name('menghapus_data');