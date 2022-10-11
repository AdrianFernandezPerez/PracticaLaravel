<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;



Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');


Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('projects.create');

Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');


Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::delete('/portafolio/{project}',  [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store'])->name('messages.store');

