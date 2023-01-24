<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin/')->namespace('Admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    /* start Home */
    Route::get('home/index', [HomeController::class, 'index'])->name('home.index');
    Route::get('home/create', [HomeController::class, 'create'])->name('home.create');
    Route::post('home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('home/update/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('home/delete/{id}', [HomeController::class, 'delete'])->name('home.delete');
    /*  End Home */

    /* start about */
    Route::get('about/index', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('about/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('about/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('about/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
    /*  End about */

    /* start Services */
    Route::get('services/index', [ServicesController::class, 'index'])->name('services.index');
    Route::get('services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('services/store', [ServicesController::class, 'store'])->name('services.store');
    Route::get('services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::post('services/update/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('services/delete/{id}', [ServicesController::class, 'delete'])->name('services.delete');
    /*  End Services */

    /* start Services */
    Route::get('blogs/index', [BlogsController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
    Route::post('blogs/store', [BlogsController::class, 'store'])->name('blogs.store');
    Route::get('blogs/edit/{id}', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::post('blogs/update/{id}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/delete/{id}', [BlogsController::class, 'delete'])->name('blogs.delete');
    /*  End Services */

    /* start Services */
    Route::get('content/index', [ContactController::class, 'index'])->name('content.index');
    Route::post('content/store', [ContactController::class, 'store'])->name('content.store');
    Route::delete('content/delete/{id}', [ContactController::class, 'delete'])->name('content.delete');
    /*  End Services */

    /* start settings */
    Route::get('settings/index', [SettingsController::class, 'index'])->name('settings.index');
    Route::get('settings/create', [SettingsController::class, 'create'])->name('settings.create');
    Route::post('settings/store', [SettingsController::class, 'store'])->name('settings.store');
    Route::get('settings/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
    Route::delete('settings/delete/{id}', [SettingsController::class, 'delete'])->name('settings.delete');
    /*  End settings */
});

Route::prefix('admin/')->namespace('Admin')->name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'show_login_view'])->name('show_login_view');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});



