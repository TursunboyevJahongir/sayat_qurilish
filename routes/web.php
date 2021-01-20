<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('dash/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('dash/admin/login', [LoginController::class, 'index'])->name('login');

Route::middleware('auth:web')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    //category
    Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'form'])->name('category.form');
    Route::post('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    //Posts
    Route::get('category/{category}/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('category/{category}/post/create', [PostController::class, 'form'])->name('post.form');
    Route::post('category/{category}/post', [PostController::class, 'create'])->name('post.create');
    Route::get('post/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.delete');

    //Projects
    Route::get('projects', [ProjectController::class, 'index'])->name('project.index');
    Route::get('project/create', [ProjectController::class, 'form'])->name('project.form');
    Route::post('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('project/update/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project/delete/{project}', [ProjectController::class, 'destroy'])->name('project.delete');
});
