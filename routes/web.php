<?php

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
    Route::get('/keywords', function () {
        return view('keywords');
    })->name('keywords');
    Route::get('/projects/create', function () {
        return view('newproject');
    })->name('newproject');
});
