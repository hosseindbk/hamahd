<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::group(['perfix' => 'Site'] , function (){
    Route::get('/'              , [IndexController::class   , 'index'])           ->name('/');
    Route::get('course'         , [CourseController::class  , 'index'])           ->name('course');
    Route::get('mycourse'       , [CourseController::class  , 'my'])              ->name('mycourse');
    Route::get('coursemain'     , [CourseController::class  , 'coursemain'])      ->name('coursemain');
    Route::get('coursedetail'   , [CourseController::class  , 'coursedetail'])    ->name('coursedetail');
    Route::get('about'          , [IndexController::class   , 'about'])           ->name('about');
    Route::get('studentdetail'  , [StudentController::class , 'studentdetail'])   ->name('studentdetail');
    Route::get('pricetable'     , [PriceController::class   , 'pricetable'])      ->name('pricetable');
    Route::get('coursegrid'     , [CourseController::class   , 'coursegrid'])     ->name('coursegrid');
    Route::get('contact'        , [IndexController::class   , 'contact'])         ->name('contact');
    Route::get('privacypolicy'  , [IndexController::class   , 'privacypolicy'])   ->name('privacypolicy');
    Route::get('checkout'       , [PriceController::class   , 'checkout'])        ->name('checkout');
    Route::get('shoppingcart'   , [PriceController::class   , 'shoppingcart'])    ->name('shoppingcart');
    Route::get('careers'        , [IndexController::class   , 'careers'])         ->name('careers');
    Route::get('categories'     , [IndexController::class   , 'categories'])      ->name('categories');
    Route::get('faq'            , [IndexController::class   , 'faq'])             ->name('faq');
    Route::get('lessondetails'  , [IndexController::class   , 'lessondetails'])   ->name('lessondetails');
    Route::get('teachers'       , [StudentController::class , 'teachers'])        ->name('teachers');

    Route::get('recover'        , [PriceController::class   , 'recover'])         ->name('recover');

});

Route::group(['perfix' => 'Dashboard'] , function (){
    Route::get('dashboard'      , [DashboardController::class   , 'index'])         ->name('dashboard');
    Route::get('bookmark'       , [DashboardController::class   , 'bookmark'])      ->name('dashboard-bookmark');
    Route::get('courses'        , [DashboardController::class   , 'courses'])       ->name('dashboard-courses');
    Route::get('earnings'       , [DashboardController::class   , 'earnings'])      ->name('dashboard-earnings');
    Route::get('enrolled'       , [DashboardController::class   , 'enrolled'])      ->name('dashboard-enrolled');
    Route::get('message'        , [DashboardController::class   , 'message'])       ->name('dashboard-message');
    Route::get('profile'        , [DashboardController::class   , 'profile'])       ->name('dashboard-profile');
    Route::get('purchase'       , [DashboardController::class   , 'purchase'])      ->name('dashboard-purchase');
    Route::get('quiz'           , [DashboardController::class   , 'quiz'])          ->name('dashboard-quiz');
    Route::get('reviews'        , [DashboardController::class   , 'reviews'])       ->name('dashboard-reviews');
    Route::get('settings'       , [DashboardController::class   , 'settings'])      ->name('dashboard-settings');
    Route::get('submit-course'  , [DashboardController::class   , 'submitcourse'])  ->name('dashboard-submitcourse');
    Route::get('withdraw'       , [DashboardController::class   , 'withdraw'])      ->name('dashboard-withdraw');


});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
