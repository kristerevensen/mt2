<?php

use App\Http\Controllers\KeywordDataController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');
    Route::get('/campaigns', function () {
        return view('campaigns');
    })->name('campaigns');
    Route::get('/pages', function () {
        return view('pages');
    })->name('pages');
    Route::get('/seo', function () {
        return view('seo');
    })->name('seo');
    Route::get('/experimentation', function () {
        return view('seo');
    })->name('experimentation');
    Route::get('/projects/create', function () {
        return view('newproject');
    })->name('newproject');
    Route::get('/url/{url_code}', [PageController::class, 'index'])->name('url.view');

    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

    Route::get('/projects/testing', [ProjectController::class, 'testing'])->name('projects.testing');
    Route::get('/keyword-data', [KeywordDataController::class, 'postKeywordData']);
    Route::get('/getid', [KeywordDataController::class, 'getid']);

});
