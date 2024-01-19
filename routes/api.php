<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Subscribers;

use App\Http\Controllers\IndividualController;
use App\Models\Individual;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/subscribers', function (Request $request) {
//     return Subscribers::all();
// });

// Route::group(['namespace'=> 'App\Http\Controllers'], function () {
    // Route::get('/i', [IndividualController::class, 'index']);
    // Route::get('/subscribers/{subscribers}', [SubscribersController::class, 'show']);?
    Route::apiResource('individual', IndividualController::class);
    Route::apiResource('business', BusinessController::class);
// });

