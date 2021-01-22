<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SlideController;
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
require_once "web-routes.php";

Route::get('/', [HomeController::class, 'index']);

Route::get('dash/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('dash/admin/login', [LoginController::class, 'index'])->name('login');

Route::middleware('auth:web')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/upl', [DashboardController::class, 'imageUpload'])->name('dashboard.upl');
    Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    //category
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('category/create', [CategoryController::class, 'form'])->name('admin.category.form');
    Route::post('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    //Posts
    Route::get('category/{category}/posts', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('category/{category}/post/create', [PostController::class, 'form'])->name('admin.post.form');
    Route::post('category/{category}/post', [PostController::class, 'create'])->name('admin.post.create');
    Route::get('post/{post}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('post/{post}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('post/{post}', [PostController::class, 'destroy'])->name('admin.post.delete');

    //Projects
    Route::get('projects', [ProjectController::class, 'index'])->name('admin.project.index');
    Route::get('project/create', [ProjectController::class, 'form'])->name('admin.project.form');
    Route::post('project/create', [ProjectController::class, 'create'])->name('admin.project.create');
    Route::get('project/edit/{project}', [ProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('project/update/{project}', [ProjectController::class, 'update'])->name('admin.project.update');
    Route::delete('project/delete/{project}', [ProjectController::class, 'destroy'])->name('admin.project.delete');

    //Employers
    Route::get('employers', [EmployerController::class, 'index'])->name('admin.employer.index');
    Route::get('employer/create', [EmployerController::class, 'form'])->name('admin.employer.form');
    Route::post('employer/create', [EmployerController::class, 'create'])->name('admin.employer.create');
    Route::get('employer/edit/{employer}', [EmployerController::class, 'edit'])->name('admin.employer.edit');
    Route::put('employer/update/{employer}', [EmployerController::class, 'update'])->name('admin.employer.update');
    Route::delete('employer/delete/{employer}', [EmployerController::class, 'destroy'])->name('admin.employer.delete');

    //News
    Route::get('news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('news/create', [NewsController::class, 'form'])->name('admin.news.form');
    Route::post('news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::get('news/edit/{news}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('news/update/{news}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('news/delete/{news}', [NewsController::class, 'destroy'])->name('admin.news.delete');

    //Slide
    Route::get('slides', [SlideController::class, 'index'])->name('admin.slide.index');
    Route::get('slide/create', [SlideController::class, 'form'])->name('admin.slide.form');
    Route::post('slide/create', [SlideController::class, 'create'])->name('admin.slide.create');
    Route::get('slide/edit/{slide}', [SlideController::class, 'edit'])->name('admin.slide.edit');
    Route::put('slide/update/{slide}', [SlideController::class, 'update'])->name('admin.slide.update');
    Route::delete('slide/delete/{slide}', [SlideController::class, 'destroy'])->name('admin.slide.delete');

    //Messages
    Route::get('messages', [MessageController::class, 'index'])->name('admin.message.index');
    Route::get('message/{message}', [MessageController::class, 'show'])->name('admin.message.show');

    Route::delete('message/delete/{message}', [MessageController::class, 'destroy'])->name('admin.message.delete');

});
