<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrizerController;
use App\Http\Controllers\TerminController;
use App\Http\Controllers\UserTerminControler;
use App\Http\Controllers\FrizerTerminControler;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('frizer', FrizerController::class)->only(['show', 'index']);
Route::resource('user', UserController::class)->only(['show', 'index']);
Route::resource('termin', TerminController::class)->only(['show', 'index', 'destroy']);

Route::get('user/{id}/termini', [UserTerminControler::class, 'index'])->name('users.termini.index');
Route::get('frizer/{id}/termini', [FrizerTerminControler::class, 'index'])->name('frizeri.termini.index');

