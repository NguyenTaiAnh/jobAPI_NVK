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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/',function (){
    return \App\Models\Applicants::all();
});

Route::group(['prefix' => 'work'], function (){
    Route::get('',[\App\Http\Controllers\WorkController::class, 'index'] );
    Route::post('',[\App\Http\Controllers\WorkController::class, 'store'] );
});Route::group(['prefix' => 'recruiter'], function (){
    Route::get('',[\App\Http\Controllers\RecruiterController::class, 'index'] );
    Route::post('',[\App\Http\Controllers\RecruiterController::class, 'store'] );
    Route::get('{ID_Recruiter}',[\App\Http\Controllers\RecruiterController::class, 'show'] );
    Route::post('{ID_Recruiter}',[\App\Http\Controllers\RecruiterController::class, 'update'] );
});
Route::group(['prefix' => 'style'], function (){
    Route::get('',function (){
        $data = \App\Models\Style::all();
        return response()->json([
            'data'=>$data,
            'message' => 'success'
        ]);
    } );
});

//Route::post('','WorkController@store' );