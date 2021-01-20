<?php
Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'index'])->name('project.index');
Route::get('projects/{id}', [\App\Http\Controllers\ProjectsController::class, 'view'])->name('project.view');

Route::get('catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
Route::get('catalog/category/{id}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog.category');
Route::get('catalog/item/{id}', [\App\Http\Controllers\CatalogController::class, 'view'])->name('catalog.view');
