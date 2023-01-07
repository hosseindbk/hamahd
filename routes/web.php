<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['perfix' => 'Site'] , function (){
    Route::get('/'              , [App\Http\Controllers\Site\IndexController::class   , 'index'])           ->name('/');
    Route::get('course'         , [App\Http\Controllers\Site\CourseController::class  , 'index'])           ->name('course');
    Route::get('mycourse'       , [App\Http\Controllers\Site\CourseController::class  , 'my'])              ->name('mycourse');
    Route::get('coursemain'     , [App\Http\Controllers\Site\CourseController::class  , 'coursemain'])      ->name('coursemain');
    Route::get('coursedetail'   , [App\Http\Controllers\Site\CourseController::class  , 'coursedetail'])    ->name('coursedetail');
    Route::get('about'          , [App\Http\Controllers\Site\IndexController::class   , 'about'])           ->name('about');
    Route::get('studentdetail'  , [App\Http\Controllers\Site\StudentController::class , 'studentdetail'])   ->name('studentdetail');
    Route::get('pricetable'     , [App\Http\Controllers\Site\PriceController::class   , 'pricetable'])      ->name('pricetable');
    Route::get('coursegrid'     , [App\Http\Controllers\Site\CourseController::class   , 'coursegrid'])     ->name('coursegrid');
    Route::get('contact'        , [App\Http\Controllers\Site\IndexController::class   , 'contact'])         ->name('contact');
    Route::get('privacypolicy'  , [App\Http\Controllers\Site\IndexController::class   , 'privacypolicy'])   ->name('privacypolicy');
    Route::get('checkout'       , [App\Http\Controllers\Site\PriceController::class   , 'checkout'])        ->name('checkout');
    Route::get('shoppingcart'   , [App\Http\Controllers\Site\PriceController::class   , 'shoppingcart'])    ->name('shoppingcart');
    Route::get('careers'        , [App\Http\Controllers\Site\IndexController::class   , 'careers'])         ->name('careers');
    Route::get('categories'     , [App\Http\Controllers\Site\IndexController::class   , 'categories'])      ->name('categories');
    Route::get('faq'            , [App\Http\Controllers\Site\IndexController::class   , 'faq'])             ->name('faq');
    Route::get('lessondetails'  , [App\Http\Controllers\Site\IndexController::class   , 'lessondetails'])   ->name('lessondetails');
    Route::get('teachers'       , [App\Http\Controllers\Site\StudentController::class , 'teachers'])        ->name('teachers');

    Route::get('recover'        , [App\Http\Controllers\Site\PriceController::class   , 'recover'])         ->name('recover');

});

Route::group(['perfix' => 'Dashboard'] , function (){
    Route::get('dashboard'      , [App\Http\Controllers\Dashboard\DashboardController::class   , 'index'])         ->name('dashboard');
    Route::get('bookmark'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'bookmark'])      ->name('dashboard-bookmark');
    Route::get('courses'        , [App\Http\Controllers\Dashboard\DashboardController::class   , 'courses'])       ->name('dashboard-courses');
    Route::get('earnings'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'earnings'])      ->name('dashboard-earnings');
    Route::get('enrolled'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'enrolled'])      ->name('dashboard-enrolled');
    Route::get('message'        , [App\Http\Controllers\Dashboard\DashboardController::class   , 'message'])       ->name('dashboard-message');
    Route::get('profile'        , [App\Http\Controllers\Dashboard\DashboardController::class   , 'profile'])       ->name('dashboard-profile');
    Route::get('purchase'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'purchase'])      ->name('dashboard-purchase');
    Route::get('quiz'           , [App\Http\Controllers\Dashboard\DashboardController::class   , 'quiz'])          ->name('dashboard-quiz');
    Route::get('reviews'        , [App\Http\Controllers\Dashboard\DashboardController::class   , 'reviews'])       ->name('dashboard-reviews');
    Route::get('settings'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'settings'])      ->name('dashboard-settings');
    Route::get('submit-course'  , [App\Http\Controllers\Dashboard\DashboardController::class   , 'submitcourse'])  ->name('dashboard-submitcourse');
    Route::get('withdraw'       , [App\Http\Controllers\Dashboard\DashboardController::class   , 'withdraw'])      ->name('dashboard-withdraw');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
