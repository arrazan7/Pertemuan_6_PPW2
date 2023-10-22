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

//Create
Route::get('/data_perpustakaan/create', [BukuController::class,'create'])->name('membuat_data');

//Store Create
Route::post('/data_perpustakaan', [BukuController::class,'store'])->name('menyimpan_data');

//Update
Route::get('/data_perpustakaan/edit/{id}', [BukuController::class, 'edit'])->name('mengedit_data');

//Store Update
Route::post('/data_perpustakaan/update/{id}', [BukuController::class, 'update'])->name('mengupdate_data');

//Delete
Route::post('/data_perpustakaan/delete/{id}', [BukuController::class,'destroy'])->name('menghapus_data');

//Search
Route::get('/data_perpustakaan/search', [BukuController::class,'search'])->name('mencari_data');