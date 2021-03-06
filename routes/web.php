<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;


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


Route::get('/', [HomeController::class,'index'])->name('home');

Auth::routes();

Route::get('/home', [PublicController::class, 'index'])->name('home');

Route::get('/announcement/new', [PublicController::class,'newAnnouncement'])->name('announcement.new');

Route::post('/announcement/create', [PublicController::class, 'createAnnouncement'])->name('announcement.create');

Route::get('/thankyou', [PublicController::class,'thankyou'])->name('thankyou');

Route::get('/category/{name}/{id}/announcement', [PublicController::class,'announcementsByCategory'])->name('announcement.category');