<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Models\Perizinan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChartController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/data',[DataController::class,'index'])->middleware('auth');
Route::post('/data/create', [DataController::class, 'create']);
Route::get('/data/{id}/edit', [DataController::class, 'edit']);
Route::post('/data/{id}/update', [DataController::class, 'update']);
Route::get('/data/{id}/delete', [DataController::class, 'delete']);



Route::get('/grafik_bar',[GrafikbarController::class,'grafik_bar'])->middleware('auth');
Route::get('/grafik_line',[GrafiklineController::class,'grafik_line'])->middleware('auth');


