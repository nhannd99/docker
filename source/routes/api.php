<?php
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');

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

Route::group(['prefix' => 'user'], function () {
    Route::post( '/login', 'AuthApiController@login' )->name('api_user_login');
    Route::post( '/register', 'AuthApiController@register' )->name('api_user_register');
    Route::post( '/forgotPassword', 'AuthApiController@forgotPassword' )->name('api_user_forgotPassword');
    Route::post( '/resetPassword', 'AuthApiController@resetPassword' )->name('api_user_resetPassword');
});
