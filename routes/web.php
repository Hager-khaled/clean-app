<?php

use App\http\Controllers\front\HomeController;
use App\http\Controllers\Admin\AdminController;
use App\http\Controllers\Admin\CategoryController;
use App\http\Controllers\front\AboutController;
use App\http\Controllers\front\PostController;
use App\http\Controllers\front\ContactController;
use App\http\Controllers\front\GalleryController;
use App\http\Controllers\front\TeamController;
use App\http\Controllers\front\ShopController;


use App\http\Controllers\front\ServiceController;
use Illuminate\Support\Facades\Route;


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

Route::name('admin.')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('home');
    Route::resource('categories', CategoryController::class);
 });



Route::name('front.')->group(function (){

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/sendmessage', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');
Route::post('/sendmessagee', [HomeController::class, 'sendMessagee'])->name('home.sendMessagee');
Route::post('/applyy', [TeamController::class, 'applyy'])->name('team.applyy');
Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
})
;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
