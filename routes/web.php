<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CMSController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Web\MainController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function () {

    //If Guest
    Route::group(['middleware' => ['isGuest']], function () {
        Route::get('', [AuthController::class, 'index']);
        Route::get('login', [AuthController::class, 'index']);
        Route::get('forget-password', [AuthController::class, 'forget']);

        Route::post('login', [AuthController::class, 'login']);
        Route::post('forget-check', [AuthController::class, 'forgetCheck']);
        Route::post('reset-password', [AuthController::class, 'resetPassword']);
    });
    //If Guest

    Route::group(['middleware' => ['isAdmin']], function () {
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::prefix('cms')->group(function () {
            Route::prefix('home-sliders')->group(function () {
                Route::get('', [CMSController::class, 'homeSlidersList']);
                Route::get('{id}', [CMSController::class, 'homeSlidersDelete']);
                Route::post('', [CMSController::class, 'homeSlidersSave']);
            });

            Route::prefix('menus')->group(function () {
                Route::get('', [CMSController::class, 'menuList']);
                Route::get('{id}', [CMSController::class, 'menuEdit']);
                Route::post('', [CMSController::class, 'menuSave']);
            });
        });



        Route::prefix('blogs')->group(function () {
            Route::get('', [BlogController::class, 'index']);
            Route::get('create', [BlogController::class, 'create']);
            Route::get('edit/{id}', [BlogController::class, 'edit']);
            Route::get('{id}', [BlogController::class, 'delete']);

            Route::post('save', [BlogController::class, 'save']);
            Route::post('update', [BlogController::class, 'update']);
        });
        Route::prefix('pages')->group(function () {
            Route::get('', [PagesController::class, 'index']);
            Route::get('create', [PagesController::class, 'create']);
            Route::get('edit/{id}', [PagesController::class, 'edit']);
            Route::get('{id}', [PagesController::class, 'delete']);

            Route::post('save', [PagesController::class, 'save']);
            Route::post('update', [PagesController::class, 'update']);
        });
        Route::prefix('profile')->group(function () {
            Route::get('', [ProfileController::class, 'index']);
            Route::post('save', [ProfileController::class, 'profileSave']);
        });
        Route::prefix('settings')->group(function () {
            Route::get('', [SettingsController::class, 'index']);
            Route::post('', [SettingsController::class, 'save']);
        });

        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('enquiries', [ProfileController::class, 'enquiries']);
    });
});

Route::group(['middleware' => ['isMaintenance']], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('', [MainController::class, 'home']);
    Route::get('home', [MainController::class, 'home']);

    Route::get('blog', [MainController::class, 'blog']);
    Route::get('blog/{slug}', [MainController::class, 'blogSingle']);
    Route::get('about-us', [MainController::class, 'about']);
    Route::get('contact-us', [MainController::class, 'contact']);

    Route::post('contact-us', [MainController::class, 'contactSave']);

    //Route::get('{menu}', [MainController::class,'menu']);
    Route::get('global', [MainController::class, 'global']);
    // Route::get('global/how-we-operate', [MainController::class,'howWeOperate']);
    // Route::get('global/it-and-data-security', [MainController::class,'itDataSecurity']);
    // Route::get('global/offshoring', [MainController::class,'offShoring']);
    // Route::get('global/services', [MainController::class,'globalServices']);

    // Route::get('consultancy/business-setup', [MainController::class,'conBusinessSetup']);
    // Route::get('consultancy/tax-compliances', [MainController::class,'conTaxCompliances']);
    // Route::get('consultancy/finance-subsidy', [MainController::class,'conFinanceSub']);
    // Route::get('consultancy/virtual-accountant-cfo', [MainController::class,'conVirAcCFO']);
    // Route::get('consultancy/other-services', [MainController::class,'conOtherServices']);

    Route::get('placement', [MainController::class, 'placement']);
    Route::get('recruitment', [MainController::class, 'placement']);
    Route::get('training', [MainController::class, 'training']);
    Route::get('consultancy', [MainController::class, 'consultancy']);

    Route::get('{menu}/{page}', [MainController::class, 'page']);
});



Route::get('site-optimize', function () {
    Artisan::call("optimize");
});
Route::get('site-optimize-clear', function () {
    Artisan::call("optimize:clear");
});
Route::get('storage-generate', function () {
    Artisan::call("storage:link");
});

Route::get('db-migration', function () {
    Artisan::call("migrate");
});
