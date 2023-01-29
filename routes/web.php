<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\FournisseursController;
use App\Http\Controllers\AchatsController;



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

Route::resource('clients', ClientsController::class)->middleware('auth');
Route::resource('articles', ArticlesController::class)->middleware('auth');
Route::resource('commandes', CommandesController::class)->middleware('auth');
Route::resource('fournisseurs', FournisseursController::class)->middleware('auth');
Route::resource('achats', AchatsController::class)->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
