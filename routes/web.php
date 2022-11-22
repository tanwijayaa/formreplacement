<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

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

Route::resource('admin/form-replacement', 'App\\Http\\Controllers\\Admin\formReplacementController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'form'])->name('home');
Route::get('/laporan/cetak_pdf', [LaporanController::class,'cetak_pdf']);