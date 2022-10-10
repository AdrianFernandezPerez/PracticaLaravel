<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
//Route::get('/portfolio', PortfolioController::class);
//Route::get('/portfolio', [PortfolioController::class, '__invoke']);
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
//Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::post('contact', [MessagesController::class, 'store']);
