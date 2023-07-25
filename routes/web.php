<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\PortController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\ProfileController;
use App\Models\Testimonial;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index');
Route::get('/about', 'App\Http\Controllers\Frontend\HomeController@about')->name('about');
Route::get('/feature/{title}', 'App\Http\Controllers\Frontend\HomeController@feature')->name('feature');
Route::get('/service/{title}', 'App\Http\Controllers\Frontend\HomeController@service')->name('service');
Route::get('/course/{title}', 'App\Http\Controllers\Frontend\HomeController@course')->name('course');
Route::get('/portfolio/{title}', 'App\Http\Controllers\Frontend\HomeController@portfolio')->name('portfolio');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', 'App\Http\Controllers\Backend\DashController@index')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // testimonial
    Route::prefix('user')->group(function () {
        Route::get('/view', [UserController::class, 'index'])->name('user.view');
        Route::get('/add', [UserController::class, 'create'])->name('user.add');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::put('/store', [UserController::class, 'store'])->name('user.store');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
        });
    // About
    Route::prefix('about')->group(function () {
    Route::get('/view', [AboutController::class, 'index'])->name('about.view');
    Route::get('/add', [AboutController::class, 'create'])->name('about.add');
    Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::put('/store', [AboutController::class, 'store'])->name('about.store');
    });
    // Feature
    Route::prefix('features')->group(function () {
    Route::get('/view', [FeatureController::class, 'index'])->name('features.view');
    Route::get('/add', [FeatureController::class, 'create'])->name('features.add');
    Route::get('/edit/{id}', [FeatureController::class, 'edit'])->name('features.edit');
    Route::put('/update/{id}', [FeatureController::class, 'update'])->name('features.update');
    Route::put('/store', [FeatureController::class, 'store'])->name('features.store');
    });
    // video
    Route::prefix('videos')->group(function () {
    Route::get('/view', [VideoController::class, 'index'])->name('videos.view');
    Route::get('/add', [VideoController::class, 'create'])->name('videos.add');
    Route::get('/edit/{id}', [VideoController::class, 'edit'])->name('videos.edit');
    Route::put('/update/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::put('/store', [VideoController::class, 'store'])->name('videos.store');
    });
    // Service
    Route::prefix('services')->group(function () {
    Route::get('/view', [ServiceController::class, 'index'])->name('services.view');
    Route::get('/add', [ServiceController::class, 'create'])->name('services.add');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::put('/store', [ServiceController::class, 'store'])->name('services.store');
    Route::Delete('/delete/{id}', [ServiceController::class, 'destroy'])->name('services.delete');
    });
    // Portfolio
    Route::prefix('portfolios')->group(function () {
    Route::get('/view', [PortController::class, 'index'])->name('portfolios.view');
    Route::get('/add', [PortController::class, 'create'])->name('portfolios.add');
    Route::get('/edit/{id}', [PortController::class, 'edit'])->name('portfolios.edit');
    Route::put('/update/{id}', [PortController::class, 'update'])->name('portfolios.update');
    Route::put('/store', [PortController::class, 'store'])->name('portfolios.store');
    Route::Delete('/delete/{id}', [PortController::class, 'destroy'])->name('portfolios.delete');
    });
    // Course
    Route::prefix('courses')->group(function () {
    Route::get('/view', [CourseController::class, 'index'])->name('courses.view');
    Route::get('/add', [CourseController::class, 'create'])->name('courses.add');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/update/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::put('/store', [CourseController::class, 'store'])->name('courses.store');
    Route::Delete('/delete/{id}', [CourseController::class, 'destroy'])->name('courses.delete');
    });
    // logo
    Route::prefix('logo')->group(function () {
    Route::get('/view', [LogoController::class, 'index'])->name('logo.view');
    Route::get('/add', [LogoController::class, 'create'])->name('logo.add');
    Route::get('/edit/{id}', [LogoController::class, 'edit'])->name('logo.edit');
    Route::put('/update/{id}', [LogoController::class, 'update'])->name('logo.update');
    Route::put('/store', [LogoController::class, 'store'])->name('logo.store');
    Route::delete('/delete/{id}', [LogoController::class, 'destroy'])->name('logo.delete');
    });
    // slider
    Route::prefix('slider')->group(function () {
    Route::get('/view', [SliderController::class, 'index'])->name('slider.view');
    Route::get('/add', [SliderController::class, 'create'])->name('slider.add');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::put('/store', [SliderController::class, 'store'])->name('slider.store');
    Route::delete('/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');
    });
    // testimonial
    Route::prefix('testimonial')->group(function () {
    Route::get('/view', [TestimonialController::class, 'index'])->name('testimonial.view');
    Route::get('/add', [TestimonialController::class, 'create'])->name('testimonial.add');
    Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::put('/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::delete('/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.delete');
    });

});

require __DIR__.'/auth.php';
