<?php


use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



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

Route::get('/', function () {
    return view('website.blog.index');
})->name('home');
Route::view('contact-us', 'website.contact')->name('contact');


/*  Trainer Routes List */
Route::middleware(['auth', 'user-access:trainer'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');
    Route::resource('courses', CourseController::class);
});


/*  User Routes List */
Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::middleware(['auth', 'auth'])->group(function () {
        Route::get('/course/{title}', [WebsiteController::class, 'show_course'])->name('website.course.show');
        Route::post('/comment', [WebsiteController::class, 'comment'])->name('website.comment');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/courses/{course}', [WebsiteController::class, 'show'])
// ->name('courses.show');






require __DIR__ . '/auth.php';
