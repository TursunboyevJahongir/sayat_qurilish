<?php
Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'index'])->name('project.index');
Route::get('projects/{id}', [\App\Http\Controllers\ProjectsController::class, 'view'])->name('project.view');
