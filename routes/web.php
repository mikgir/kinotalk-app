<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\AdminIndex;
use App\Http\Livewire\Front\Articles\Articles;
use App\Http\Livewire\Front\Articles\ShowArticleById;
use App\Http\Livewire\Front\Articles\ShowArticlesByNewsCategory;
use App\Http\Livewire\Front\MainPage;
use App\Http\Livewire\Front\NewsCategory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('comingsoon.comingsoon-bg-video');
});
Route::get('/main', MainPage::class)->name('main');

Route::middleware('auth')->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('/admin', AdminIndex::class)->name('admin.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de', 'es', 'fr', 'pt', 'ru'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');

require  __DIR__.'/examples=admin.php';

Route::get('layout-{light}', function ($light) {
    session()->put('layout', $light);
    session()->get('layout');
    if ($light == 'vertical-layout') {
        return redirect()->route('pages-vertical-layout');
    }
    return redirect()->route('index');
    return 1;
});
Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');

Route::get('/newsCategories', NewsCategory::class)->name('newsCategories');
Route::get('/articles', Articles::class)->name('articles');

Route::get('/category/{newsCategory}/articles', ShowArticlesByNewsCategory::class)
    ->where('newsCategory', '\d+')
    ->name('category.articles');

Route::get('/article/{article}', ShowArticleById::class)
    ->where('article', '\d+')
    ->name('article');

require __DIR__.'/auth.php';
