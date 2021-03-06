<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('save_event');
Route::get('/event/{id}', [EventController::class, 'show'])->name('show_event');
