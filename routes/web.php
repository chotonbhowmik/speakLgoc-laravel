<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\AnalysisQuestionController;
use App\Http\Controllers\Backend\AnalysisAnswerController;
use App\Http\Controllers\Backend\AnalysisSettingController;
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
});
    // post route
    Route::group(['prefix' => 'post'], function () {
        Route::get('/manage', [PostController::class, 'index'])->name('post.manage');

        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('/edit/{id}', [PostController::class, 'update'])->name('post.update');
        Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    });
    Route::group(['prefix' => 'analysisquestion'], function () {
        Route::get('/manage', [AnalysisQuestionController::class, 'index'])->name('analysisQuestion.manage');

        Route::get('/create', [AnalysisQuestionController::class, 'create'])->name('analysisQuestion.create');
        Route::post('/store', [AnalysisQuestionController::class, 'store'])->name('analysisQuestion.store');
        Route::get('/edit/{id}', [AnalysisQuestionController::class, 'edit'])->name('analysisQuestion.edit');
        Route::post('/edit/{id}', [AnalysisQuestionController::class, 'update'])->name('analysisQuestion.update');
        Route::post('/delete/{id}', [AnalysisQuestionController::class, 'destroy'])->name('analysisQuestion.destroy');
    });

    Route::group(['prefix' => 'analysisAnswer'], function () {
        Route::get('/manage', [AnalysisAnswerController::class, 'index'])->name('analysisAnswer.manage');

        Route::get('/create', [AnalysisAnswerController::class, 'create'])->name('analysisAnswer.create');
        Route::post('/store', [AnalysisAnswerController::class, 'store'])->name('analysisAnswer.store');
        Route::get('/edit/{id}', [AnalysisAnswerController::class, 'edit'])->name('analysisAnswer.edit');
        Route::post('/edit/{id}', [AnalysisAnswerController::class, 'update'])->name('analysisAnswer.update');
        Route::post('/delete/{id}', [AnalysisAnswerController::class, 'destroy'])->name('analysisAnswer.destroy');
    });
    Route::group(['prefix' => 'analysissetting'], function () {
        Route::get('/manage', [AnalysisSettingController::class, 'index'])->name('analysissetting.manage');

        Route::get('/create', [AnalysisSettingController::class, 'create'])->name('analysissetting.create');
        Route::post('/store', [AnalysisSettingController::class, 'store'])->name('analysissetting.store');
        Route::get('/edit/{id}', [AnalysisSettingController::class, 'edit'])->name('analysissetting.edit');
        Route::post('/edit/{id}', [AnalysisSettingController::class, 'update'])->name('analysissetting.update');
        Route::post('/delete/{id}', [AnalysisSettingController::class, 'destroy'])->name('analysissetting.destroy');
    });
});
