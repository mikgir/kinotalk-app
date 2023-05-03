<?php


use App\Http\Controllers\Admin\Articles\ArticleController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Comment\CommentController;
use App\Http\Controllers\Admin\Permission\PermissionController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'admin'], function (){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    });
    Route::group(['prefix' => 'article'], function () {
        Route::get('/',[ArticleController::class,'index'])->name('article.index');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
    });
    Route::group(['prefix' => 'role'], function () {
        Route::get('/',[RoleController::class,'index'])->name('role.index');
    });
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/',[PermissionController::class,'index'])->name('permission.index');
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/',[CommentController::class,'index'])->name('comment.index');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/',[UserController::class,'index'])->name('users.index');
    });
});
