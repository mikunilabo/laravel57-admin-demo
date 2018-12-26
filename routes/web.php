<?php

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

// Route::view('/', 'welcome');
Route::view('/', 'coreui');

Auth::routes(['verify' => true]);

Route::prefix('/')->middleware(['auth', 'verified'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');

    Route::get('notifications', 'UsersController@notifications');

    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->name('users');

        Route::prefix('{user}')->group(function () {
            Route::post('follow', 'UsersController@follow')->name('follow');
            Route::delete('unfollow', 'UsersController@unfollow')->name('unfollow');
        });
    });
});
