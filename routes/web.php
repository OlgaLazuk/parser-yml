<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckPassword;
use App\Service\DownloadPriceService;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('main_page');

Route::get('/catalog', [CatalogController::class, 'index'])
    ->middleware(CheckPassword::class)
    ->name('catalog');

Route::get('/register', [LoginController::class, 'register'])
    ->name('register');
Route::post('/register', [LoginController::class, 'registration'])
    ->name('registration');

Route::get('/login', [LoginController::class, 'login'])
    ->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])
    ->name('checkLogin');



