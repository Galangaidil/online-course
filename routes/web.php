<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('courses');
    Route::get('/{course}', [CourseController::class, 'show'])->middleware(['auth']);
    Route::get('/{course}/{detailcourse}', [CourseController::class, 'detail'])->middleware(['auth']);
});

Route::get('/dashboard/create', [CourseController::class, 'create'])->middleware(['auth']);

require __DIR__ . '/auth.php';
