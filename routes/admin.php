<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/',[UserController::class,'index'])->name('user.index');
        });
});
