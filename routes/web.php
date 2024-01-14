<?php

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('subscribers', [SubscriberController::class, 'index']);
// Route::get('subscribers/create', [SubscriberController::class, 'create']);
// Route::post('subscribers', [SubscriberController::class, 'store']);
// Route::get('subscribers/{id}', [SubscriberController::class, 'show']);
// Route::get('subscribers/{id}/edit', [SubscriberController::class, 'edit']);
// Route::put('subscribers/{id}', [SubscriberController::class, 'update']);
// Route::delete('subscribers/{id}', [SubscriberController::class, 'destroy']);
