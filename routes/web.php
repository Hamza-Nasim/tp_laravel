<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticCon;
use App\Http\Controllers\PagesController;
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
Route::get('/',[staticCon::class , "home"] )->name("home.home");
Route::get('/contact',[staticCon::class , "contact"] )->name("home.contact");
Route::get('/thanks',[staticCon::class , "thanks"] )->name("home.thanks");
Route::resource('Users' ,PagesController::class);

