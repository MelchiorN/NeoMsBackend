<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PersonneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login',[AuthController::class,'login']);
// Route::middleware('auth:sanctum')->group(function(){
//     Route::get('/user',fn(Request $request)=>$request->user());
//     Route::post('/personnes',[PersonneController::class,'store']);
//     Route::get('/personnes',[PersonneController::class,'index']);
//     Route::get('personnes/{id}',[PersonneController::class,'show']);
//     Route::put('personnes/{id}',[PersonneController::class,'update']);
//     Route::delete('personne/{id}',[PersonneController::class,'destroy']);

// });
