<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/blog-details',[HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/about',[HomeController::class, 'aboutDetails'])->name('about');
