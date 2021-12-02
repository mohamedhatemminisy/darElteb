<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\VisitController;
use App\Http\Controllers\Api\ReservationController;

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

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('code_check', [UserController::class, 'code_check']);
Route::get('countries', [UserController::class, 'countries']);
Route::post('reseat_password', [UserController::class, 'reseatPassword']);

Route::middleware('auth:api')->group(function () {
    Route::post('/update_profile', [UserController::class, 'updateProfile']);
    Route::post('/changePassword', [UserController::class, 'change_password']);
    Route::get('/profile',[UserController::class, 'getProfileData']);
    Route::post('/update_device_token',[UserController::class, 'update_device_token']);

    Route::post('/contact',[ContactController::class, 'contact']);
    Route::post('/add_address',[VisitController::class, 'add_address']);
    Route::get('/user_addresses',[VisitController::class, 'user_addresses']);
    Route::get('/test',[TestController::class, 'test']);
    Route::get('/appointments',[TestController::class, 'appointments']);
    Route::post('/homeReservation',[ReservationController::class, 'home_reservation']);
    Route::post('/rate',[ReservationController::class, 'rate']);
    Route::get('/UserHomeReservation',[ReservationController::class, 'UserHomeReservation']);
    Route::get('/CancelReservation',[ReservationController::class, 'CancelReservation']);
    Route::get('/DeleteReservation',[ReservationController::class, 'DeleteReservation']);

});