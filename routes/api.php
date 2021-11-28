<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestapiController;


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
// public routes
Route::post('/register', [AuthController::class, 'register']);
Route::get('/restapi', [RestapiController::class, 'index']);
Route::get('/restapi/{id}', [RestapiController::class, 'show']);
Route::get('/restapi/search/{devise}', [RestapiController::class, 'search']);


// Protected routes
Route::group(['middleware'=> ['auth:sanctum']], function () {
    Route::post('/restapi', [RestapiController::class, 'store']);
    Route::put('/restapi/{id}', [RestapiController::class, 'update']);
    Route::delete('/restapi/{id}', [RestapiController::class, 'destroy']);
    
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
