<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjetController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog'); 

Route::get('/portfolio',[ProjetController::class, 'index'])->name('portfolio');


Route::get('/admin', function(){
    return view('admin.index');
})->name('admin');

Route::get('/admin/blog/add', [BlogController::class, 'create'])->name('addblog');

Route::post('/admin/blog/add2', [BlogController::class, 'addblog'])->name('postaddblog');

Route::get('/admin/portfolio/add',[ProjetController::class, 'create'])->name('addportfolio');
Route::post('/admin/portfolio/add2',[ProjetController::class, 'afficherprojet'])->name('postaddportfolio');