<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){
    Route::get('/'              , [App\Http\Controllers\Site\IndexController::class   , 'index'])->name('/');
    Route::get('course'         , [App\Http\Controllers\Site\CourseController::class  , 'index'])->name('course');

});
//Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web' , 'checkAdmin'], 'prefix' => 'admin'],function (){

Route::prefix('admin')->middleware(['auth:web' , 'checkAdmin'])->group(function (){

    Route::get('dashboard'                  , [App\Http\Controllers\Admin\PanelController::class   , 'index'])->name('/');
    Route::resource('users'               , App\Http\Controllers\Admin\UserController::class);
    Route::resource('users'               , App\Http\Controllers\Admin\UserController::class);
    Route::resource('slides'              , App\Http\Controllers\Admin\SlideController::class);
    Route::resource('permissions'         , App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles'               , App\Http\Controllers\Admin\RoleController::class);
    Route::resource('levelAdmins'         , App\Http\Controllers\Admin\LevelManageController::class);
    Route::resource('profile'             , App\Http\Controllers\Admin\ProfileController::class);
    Route::resource('menudashboards'      , App\Http\Controllers\Admin\MenudashboardController::class);
    Route::resource('submenudashboards'   , App\Http\Controllers\Admin\SubmenudashboardController::class);
});

Route::prefix('/')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginuserForm'])->name('login');
    Route::get('register'   , [App\Http\Controllers\Auth\RegisterController::class , 'showRegistrationuserForm'])->name('register');

});

Route::prefix('admin')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginForm'])->name('panellogin');
    Route::post('login'     , [App\Http\Controllers\Auth\LoginController::class , 'panellogin'])->name('panellogin');
    Route::get('logout'     , [App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('panellogout');

});

//Auth::routes();

