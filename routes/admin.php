<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([ 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {

        Route::get('/', function () {
            return view('dashboard.index');
        })->name('admin.dashboard');

        Route::get('/users','App\Http\Controllers\Dashboard\UserController@index')->name('users');
        Route::get('/users/details/{id}','App\Http\Controllers\Dashboard\UserController@details')
        ->name('user.details');

        Route::group(['prefix' => 'contact'] ,function(){
            Route::get('/','App\Http\Controllers\Dashboard\ContactController@index')
            ->name('contact');
            Route::get('/details/{id}','App\Http\Controllers\Dashboard\ContactController@details')
            ->name('contact.details');
        });

        Route::resource('countries','App\Http\Controllers\Dashboard\CountryController');
        Route::get('/countries/delete/{id}','App\Http\Controllers\Dashboard\CountryController@destroy')->name('countries.delete');
        Route::post('countries_update/{id}','App\Http\Controllers\Dashboard\CountryController@update')
        ->name('countries_update');
 
        Route::resource('tests','App\Http\Controllers\Dashboard\TestController');
        Route::get('/tests/delete/{id}','App\Http\Controllers\Dashboard\TestController@delete')->name('tests.delete');
 

        
    });

 

    Route::get('admin/login', 'App\Http\Controllers\Dashboard\LoginController@login')
    ->name('admin.login');



    Route::get('logout', 'App\Http\Controllers\Dashboard\LoginController@logout')->name('admin.logout');
    Route::post('admin/login', 'App\Http\Controllers\Dashboard\LoginController@postLogin')
    ->name('admin.post.login');
    Route::get('profile/edit', 'App\Http\Controllers\Dashboard\ProfileController@editProfile')
    ->name('edit.profile');
    Route::put('profile/update', 'App\Http\Controllers\Dashboard\ProfileController@updateprofile')
    ->name('update.profile');



});
