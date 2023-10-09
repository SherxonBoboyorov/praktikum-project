<?php

use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\FaqController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImprintController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProtectionController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ApplicantsController;
use App\Http\Controllers\Front\EmployersController;
use App\Http\Controllers\Front\IndexController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use UniSharp\Laravel\LaravelFilemanager\Lfm;

Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'article' => ArticleController::class,
        'faq' => FaqController::class,
        'employer' => EmployerController::class,
        'applicant' => ApplicantController::class,
        'page' => PageController::class,
        'contact' => ContactController::class,
        'download' => DownloadController::class,
        'category' => CategoryController::class,
        'document' => DocumentController::class,
        'link' => LinkController::class,
        'imprint' => ImprintController::class,
        'protection' => ProtectionController::class,
        'options' => OptionsController::class
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){ 
         Route::get('/', [IndexController::class, 'homePage'])->name('/');
         Route::get('about', [AboutController::class, 'about'])->name('about');
         Route::get('articles', [IndexController::class, 'list'])->name('articles');
         Route::get('articles/{id}', [IndexController::class, 'show'])->name('article');
         Route::get('contact', [ContactController::class, 'contact'])->name('contact');
         Route::get('for-employers', [EmployersController::class, 'list'])->name('for-employers');
         Route::get('for-employers/{slug?}', [EmployersController::class, 'show'])->name('show.for-employer');
         Route::get('for-applicants', [ApplicantsController::class, 'list'])->name('for-applicants');
         Route::get('for-applicants/{slug?}', [ApplicantsController::class, 'show'])->name('show.for-applicant');
    });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

