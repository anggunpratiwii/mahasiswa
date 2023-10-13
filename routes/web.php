<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/home/tambah', [MahasiswaController::class, 'create']);
Route::post('/home/simpan', [MahasiswaController::class, 'store']);
Route::get('/home/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/home/update/', [MahasiswaController::class, 'update']);
Route::get('/home/hapus/{id}', [MahasiswaController::class, 'destroy']);






