<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){
    Route::get('/'              , [App\Http\Controllers\Site\IndexController::class   , 'index'])->name('/');
    Route::get('course'         , [App\Http\Controllers\Site\CourseController::class  , 'index'])->name('course');

});
//Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web' , 'checkAdmin'], 'prefix' => 'admin'],function (){

Route::prefix('panel')->middleware(['auth:web' , 'checkAdmin'])->group(function (){

    Route::get('dashboard'              , [App\Http\Controllers\Admin\PanelController::class   , 'index'])->name('/');
    Route::get('users'                  , [App\Http\Controllers\Admin\UserController::class , 'index']);

});

Route::prefix('/')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginuserForm'])->name('login');
    Route::get('register'   , [App\Http\Controllers\Auth\RegisterController::class , 'showRegistrationuserForm'])->name('register');

});

Route::prefix('panel')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginForm'])->name('panellogin');
    Route::post('login'     , [App\Http\Controllers\Auth\LoginController::class , 'panellogin'])->name('panellogin');
    Route::get('logout'     , [App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('panellogout');

});

//Auth::routes();

