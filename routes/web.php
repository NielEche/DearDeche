<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\LookBookController;
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

Route::post('/lookbookstore', [LookBookController::class, 'store'])->name('lookbookstore');
Route::post('/book1', [LookBookController::class, 'showData'])->name('book1');
Route::post('/book2', [LookBookController::class, 'showData2'])->name('book2');
Route::post('/book3', [LookBookController::class, 'showData3'])->name('book3');


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/collab', [PagesController::class, 'collab'])->name('collab');
Route::get('/lookbook', [PagesController::class, 'lookbook'])->name('lookbook');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');
Route::get('/sustain', [PagesController::class, 'sustain'])->name('sustain');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/shipping', [PagesController::class, 'shipping'])->name('shipping');
Route::get('/returnpolicy', [PagesController::class, 'policy'])->name('returnpolicy');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contactstore', [ContactController::class, 'store'])->name('contactstore');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




