<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PegawaiController::class, 'index']);
Route::get('/insert', [PegawaiController::class, 'create']);
Route::post('/simpanpegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
Route::post('/updatepegawai', [PegawaiController::class, 'update']);
Route::get('/pegawai/{id}/delete', [PegawaiController::class, 'delete']);

    

// Route::resource('/pegawai', PegawaiController::class); 