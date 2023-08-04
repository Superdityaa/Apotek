<?php

use App\Http\Controllers\obatController;
use App\Http\Controllers\TransaksiController;
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
    return view('home');
});

// Route::get('/add', function () {
//     return view('addobat');
// });

// Route::get('/show', function () {
//     return view('indexobat');
// });

Route::get('/showobat', [obatController::class,'showObat']) -> name('showobat');
Route::get('/addobat', [obatController::class,'tampilObat']) -> name('addobat');
Route::post('/creat', [obatController::class,'addObat']) -> name('creat');

Route::get('/showEdit/{id}', [obatController::class,'showEdit']) -> name('showEdit');
Route::post('/updateObat/{id}', [obatController::class,'updateObat']) -> name('updateObat');


Route::get('/delete_obat/{id}',[obatController::class, 'delete']);


Route::get('/index',[TransaksiController::class, 'index'])->name('index');
Route::get('/tampil',[TransaksiController::class, 'tampil'])->name('tampil');
Route::post('/tambah',[TransaksiController::class, 'addTransaksi']);

Route::get('/edit/{id}', [TransaksiController::class, 'edit']);
Route::post('/update/{id}', [TransaksiController::class, 'updateTransaksi']);
Route::get('/delete/{id}',[TransaksiController::class, 'delete']);

