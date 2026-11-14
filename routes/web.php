<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
Route::get('/',[BlogController::class,'home'])->name('home');
Route::get('/about-us',[BlogController::class,'about'])->name('about');
Route::get('/articoli',[BlogController::class,'index'])->name('articoli.index');
Route::get('/articoli/{slug}',[BlogController::class,'show'])->name('articoli.show');
Route::get('/utenti',[UserController::class,'index'])->name('utenti.index');
Route::get('/utenti/{id}',[UserController::class,'show'])->name('utenti.show');
