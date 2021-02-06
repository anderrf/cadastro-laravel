<?php

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('v1')->group(function(){
    Route::get('lista', function(){
        return ["a", "b", "c", "d"];
    });

    Route::post('cadastra', function(){
        echo 'implementar';
    });
});

/*Route::prefix('v2')->group(function(){
    //
});*/


