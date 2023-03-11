<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){

    Route::get('/'                          , [App\Http\Controllers\Site\IndexController::class   , 'index'])           ->name('/');
    Route::get('شرایط-ضوابط'                , [App\Http\Controllers\Site\IndexController::class   , 'terms'])           ->name('شرایط-ضوابط');
    Route::get('بیوگرافی'                   , [App\Http\Controllers\Site\IndexController::class   , 'bio'])             ->name('بیوگرافی');
    Route::get('آرشیو-تصویر'                , [App\Http\Controllers\Site\IndexController::class   , 'pictures'])        ->name('آرشیو-تصویر');
    Route::get('آرشیو-ویدئو'                , [App\Http\Controllers\Site\IndexController::class   , 'videos'])          ->name('آرشیو-ویدئو');
    Route::get('آرشیو-صوتی'                 , [App\Http\Controllers\Site\IndexController::class   , 'musics'])          ->name('آرشیو-صوتی');
    Route::get('آرشیو-کتب-و-نوشتار'         , [App\Http\Controllers\Site\IndexController::class   , 'books'])           ->name('آرشیو-کتب-و-نوشتار');
    Route::get('آرشیو-کتب-و-نوشتار/{slug}'  , [App\Http\Controllers\Site\IndexController::class   , 'bookdetail']);
    Route::get('آرشیو-ویدئو/{slug}'         , [App\Http\Controllers\Site\IndexController::class   , 'videodetail']);
    Route::get('آرشیو-صوتی/{slug}'          , [App\Http\Controllers\Site\IndexController::class   , 'musicdetail']);
    Route::get('آرشیو-تصویر/{slug}'         , [App\Http\Controllers\Site\IndexController::class   , 'picturedetail']);


    Route::get('course'             , [App\Http\Controllers\Site\CourseController::class  , 'index'])           ->name('course');
    Route::get('about'              , [App\Http\Controllers\Site\IndexController::class   , 'about'])           ->name('about');
    Route::get('contact'            , [App\Http\Controllers\Site\IndexController::class   , 'contact'])         ->name('contact');
    Route::get('privacypolicy'      , [App\Http\Controllers\Site\IndexController::class   , 'privacypolicy'])   ->name('privacypolicy');
    Route::get('careers'            , [App\Http\Controllers\Site\IndexController::class   , 'careers'])         ->name('careers');
    Route::get('categories'         , [App\Http\Controllers\Site\IndexController::class   , 'categories'])      ->name('categories');
    Route::get('faq'                , [App\Http\Controllers\Site\IndexController::class   , 'faq'])             ->name('faq');
    Route::get('lessondetails'      , [App\Http\Controllers\Site\IndexController::class   , 'lessondetails'])   ->name('lessondetails');
    Route::get('shoppingcart'       , [App\Http\Controllers\Site\PriceController::class   , 'shoppingcart'])    ->name('shoppingcart');
    Route::get('checkout'           , [App\Http\Controllers\Site\PriceController::class   , 'checkout'])        ->name('checkout');
    Route::get('pricetable'         , [App\Http\Controllers\Site\PriceController::class   , 'pricetable'])      ->name('pricetable');
    Route::get('recover'            , [App\Http\Controllers\Site\PriceController::class   , 'recover'])         ->name('recover');
    Route::get('mycourse'           , [App\Http\Controllers\Site\CourseController::class  , 'my'])              ->name('mycourse');
    Route::get('coursemain'         , [App\Http\Controllers\Site\CourseController::class  , 'coursemain'])      ->name('coursemain');
    Route::get('coursedetail'       , [App\Http\Controllers\Site\CourseController::class  , 'coursedetail'])    ->name('coursedetail');
    Route::get('coursegrid'         , [App\Http\Controllers\Site\CourseController::class  , 'coursegrid'])      ->name('coursegrid');
    Route::get('studentdetail'      , [App\Http\Controllers\Site\StudentController::class , 'studentdetail'])   ->name('studentdetail');


});
//Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web' , 'checkAdmin'], 'prefix' => 'admin'],function (){

Route::prefix('admin')->middleware(['auth:web' , 'checkAdmin'])->group(function (){

    Route::get('panel'                            , [App\Http\Controllers\Admin\PanelController::class   , 'index'])->name('/');
    Route::resource('gallerypicmanage'          , App\Http\Controllers\Admin\GallerypicController::class);
    Route::resource('gallerymusicmanage'        , App\Http\Controllers\Admin\GallerymusicController::class);
    Route::resource('galleryvideomanage'        , App\Http\Controllers\Admin\GalleryvideoController::class);
    Route::resource('bookmanage'                , App\Http\Controllers\Admin\BookmanageController::class);
    Route::resource('users'                     , App\Http\Controllers\Admin\UserController::class);
    Route::resource('slides'                    , App\Http\Controllers\Admin\SlideController::class);
    Route::resource('permissions'               , App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('programs'                  , App\Http\Controllers\Admin\ProgramController::class);
    Route::resource('roles'                     , App\Http\Controllers\Admin\RoleController::class);
    Route::resource('levelAdmins'               , App\Http\Controllers\Admin\LevelManageController::class);
    Route::resource('profile'                   , App\Http\Controllers\Admin\ProfileController::class);
    Route::resource('menudashboards'            , App\Http\Controllers\Admin\MenudashboardController::class);
    Route::resource('submenudashboards'         , App\Http\Controllers\Admin\SubmenudashboardController::class);
    Route::resource('submenus'                  , App\Http\Controllers\Admin\SubmenuController::class);
    Route::resource('menus'                     , App\Http\Controllers\Admin\MenuController::class);
    Route::resource('logomanage'                , App\Http\Controllers\Admin\LogoController::class);
    Route::resource('originalcategorysitemanage', App\Http\Controllers\Admin\OriginalcategorysiteController::class);
    Route::resource('subcategorysitemanage'     , App\Http\Controllers\Admin\SubcategorysiteController::class);

    Route::delete('menudashboards'          , [App\Http\Controllers\Admin\MenudashboardController::class    , 'deletemenudashboards'])   ->name('deletemenudashboards');
    Route::delete('submenudashboards'       , [App\Http\Controllers\Admin\SubmenudashboardController::class , 'deletesubmenudashboards'])->name('deletesubmenudashboards');
    Route::delete('permissions'             , [App\Http\Controllers\Admin\PermissionController::class       , 'deletepermissions'])      ->name('deletepermissions');
    Route::delete('roles'                   , [App\Http\Controllers\Admin\RoleController::class             , 'deleteroles'])            ->name('deleteroles');
    Route::delete('deleteadminlevel'        , [App\Http\Controllers\Admin\RoleController::class             , 'deleteadminlevel'])       ->name('deleteadminlevel');
    Route::delete('deleteuser'              , [App\Http\Controllers\Admin\UserController::class             , 'deleteuser'])             ->name('deleteuser');
    Route::delete('deletemenus'             , [App\Http\Controllers\Admin\MenuController::class             , 'deletemenus'])            ->name('deletemenus');
    Route::delete('deletesubmenus'          , [App\Http\Controllers\Admin\SubmenuController::class          , 'deletesubmenus'])         ->name('deletesubmenus');

    Route::post('slides/img'                , [App\Http\Controllers\Admin\MediaController::class , 'imgupload'])                         ->name('img');
    Route::post('gallerypicmanage/img'      , [App\Http\Controllers\Admin\MediaController::class , 'imgupload'])                         ->name('img');

});

Route::prefix('/')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class     , 'showLoginuserForm'])         ->name('login');
    Route::get('logout'     , [App\Http\Controllers\Auth\LoginController::class     , 'logout'])                    ->name('logout');
    Route::post('login'     , [App\Http\Controllers\Auth\LoginController::class     , 'userlogin'])                 ->name('userlogin');
    Route::get('register'   , [App\Http\Controllers\Auth\RegisterController::class  , 'showRegistrationuserForm'])  ->name('register');

});

Route::prefix('admin')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginForm']) ->name('panellogin');
    Route::post('login'     , [App\Http\Controllers\Auth\LoginController::class , 'panellogin'])    ->name('panellogin');
    Route::get('logout'     , [App\Http\Controllers\Auth\LoginController::class , 'logout'])        ->name('panellogout');

});

//Auth::routes();

