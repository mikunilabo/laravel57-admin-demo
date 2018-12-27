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

Auth::routes(['verify' => true]);

Route::prefix('/')->middleware(['auth'/* 'verified'*/])->group(function () {
    Route::view('/', $name = 'home')->name($name);

    Route::view($name = 'colors', $name)->name($name);
    Route::view($name = 'typography', $name)->name($name);

    Route::prefix($prefix = 'base')->name(sprintf('%s.', $prefix))->group(function () use ($prefix) {
        Route::view(sprintf('%s.%s', $prefix, $name = 'breadcrumb'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'cards'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'carousel'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'collapse'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'forms'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'jumbotron'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'list_group'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'navs'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'pagination'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'popovers'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'progress'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'scrollspy'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'switches'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'tables'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'tabs'), $name)->name($name);
        Route::view(sprintf('%s.%s', $prefix, $name = 'tooltips'), $name)->name($name);
    });
});
