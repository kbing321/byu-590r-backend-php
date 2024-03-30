<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\MovieController;
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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::controller(UserController::class)->group(function(){
        Route::get('user', 'getUser');
        Route::post('user/upload_avatar', 'uploadAvatar');
        Route::delete('user/remove_avatar','removeAvatar');
        Route::post('user/send_verification_email','sendVerificationEmail');
        Route::post('user/change_email', 'changeEmail');
    });

    Route::resource('movies', MovieController::class);
    Route::controller(MovieController::class)->group(function(){
        Route::post('movies/{id}/update_movie_picture', 'updateMoviePicture');
    });
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
