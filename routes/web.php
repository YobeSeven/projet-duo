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
Route::get('/admin/blog/all',[BlogController::class,'show'])->name('allBlog');
Route::delete('/admin/blog/{id}/delete',[BlogController::class , 'destroy'])->name('deleteBlog');
Route::get('/admin/blog/{id}/edit',[BlogController::class , 'edit'])->name('editBlog');
Route::put('admin/blog/{id}/update',[BlogController::class, 'update'])->name('updateBlog');

Route::get('/admin/portfolio/add',[ProjetController::class, 'create'])->name('addportfolio');
Route::post('/admin/portfolio/add2',[ProjetController::class, 'afficherprojet'])->name('postaddportfolio');
Route::get('/admin/portfolio/all',[ProjetController::class,'show'])->name('allPortfolio');
Route::delete('/admin/portfolio/{id}/delete',[ProjetController::class, 'destroy'])->name('deletePortfolio');
Route::get('/admin/portfolio/{id}/edit',[ProjetController::class, 'edit'])->name('editPortfolio');
Route::put('/admin/portfolio/{id}/update',[ProjetController::class, 'update'])->name('updatePortfolio');
