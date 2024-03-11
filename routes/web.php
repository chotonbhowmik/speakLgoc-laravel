<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\ErrorController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\AnalysisController;

use App\Models\Backend\Post;

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
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [PagesController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
       Route::get('post/showModal/{id}', 'Backend\PostController@showModal')->name('post.showModal');


    });
    // post route
    Route::group(['prefix' => 'post'], function () {
        Route::get('/manage', [PostController::class, 'index'])->name('post.manage');
        Route::get('/create', [PostController::class, 'create'])->name('post.create'); // Uncomment this line
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('/edit/{id}', [PostController::class, 'update'])->name('post.update');
        Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
        Route::get('/showModal/{id}', [PostController::class, 'showModal'])->name('post.showModal');
    });


    Route::group(['prefix' => 'analysis'], function () {
        Route::get('/', [AnalysisController::class, 'index'])->name('analysis.index');
        Route::post('/', [AnalysisController::class, 'store'])->name('analysis.store');
    });

    Route::post('/submit-error', [ErrorController::class, 'store'])->name('error.store');
    Route::delete('/identify-errors/{id}', [ErrorController::class, 'destroy'])->name('error.destroy');



});
