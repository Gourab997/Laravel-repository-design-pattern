<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::get('/users', function (Request $request) {
        return "Hello";
    });
    Route::get('/organization', [OrganizationController::class,'index'] );
    Route::post('/organization', [OrganizationController::class,'store'] );

});


