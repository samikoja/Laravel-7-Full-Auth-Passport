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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/verified-only', function(Request $request){

    dd('your are verified', $request->user()->name);
})->middleware('auth:api','verified');


    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('/logout', 'Auth\AuthController@logout');
        Route::get('/json', 'Auth\AuthController@get_users')->middleware('admin');  
    });


Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@login');


Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');