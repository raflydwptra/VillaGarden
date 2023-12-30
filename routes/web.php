<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'ShowLoginForm']);
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'ShowRegisterForm']);

Auth::routes();

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);

        //galleries
        Route::resource('/gallery', App\Http\Controllers\Admin\GalleryController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']);

        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);

        //booking
        Route::resource('/booking', App\Http\Controllers\Admin\BookingController::class, ['except' => 'show' ,'as' => 'admin']);
    });

});

Route::prefix('user')->group(function () {
    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        // Route::resource('/dashboard', App\Http\Controllers\User\DashboardController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'user']);
        Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard.index');

        //permissions
        Route::resource('/booking', App\Http\Controllers\User\BookingController::class, ['except' => ['edit', 'update', 'delete'] ,'as' => 'user']);

        //feedback
        Route::resource('/feedback', App\Http\Controllers\User\FeedbackController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'user']);
    });
});

