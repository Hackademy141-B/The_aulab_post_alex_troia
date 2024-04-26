<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'home'])->name('homePage');

Route::get('/article/create',[ArticleController::class, 'create'])->name('articleCreate');
Route::post('/article/store', [ArticleController::class, 'store'])->name('articleStore');
Route::get('/article/index', [ArticleController::class, 'index'])->name('articleIndex');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('articleShow');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('articlebyCategory');
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careersSubmit');

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::patch('/admin/{user}/set-admin',[AdminController::class, 'setAdmin'])->name('adminSetAdmin');
    Route::patch('/admin/{user}/set-revisor',[AdminController::class, 'setRevisor'])->name('adminSetRevisor');
    Route::patch('/admin/{user}/set-writer',[AdminController::class, 'setWriter'])->name('adminSetWriter');
    Route::put('/admin/edit/{tag}/tag',[AdminController::class, 'editTag'])->name('adminEditTag');
    Route::delete('/admin/delete/{tag}/tag',[AdminController::class, 'deleteTag'])->name('adminDeleteTag');
    Route::put('/admin/edit/{category}/category',[AdminController::class, 'editCategory'])->name('adminEditCategory');
    Route::delete('/admin/delete/{category}/category',[AdminController::class, 'deleteCategory'])->name('adminDeleteCategory');
    Route::post('/admin/category/store',[AdminController::class, 'storeCategory'])->name('adminStoreCategory');
});