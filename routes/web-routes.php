<?php
Route::get('about', [\App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('contacts', [\App\Http\Controllers\HomeController::class, 'contacts'])->name('home.contacts');
Route::post('contacts', [\App\Http\Controllers\HomeController::class, 'contacts'])->name('home.contacts.form');
Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'index'])->name('project.index');
Route::get('projects/{id}', [\App\Http\Controllers\ProjectsController::class, 'view'])->name('project.view');

Route::get('catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
Route::get('catalog/category/{id}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog.category');
Route::get('catalog/item/{id}', [\App\Http\Controllers\CatalogController::class, 'view'])->name('catalog.view');

Route::get('news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('news/{id}', [\App\Http\Controllers\NewsController::class, 'view'])->name('news.view');
