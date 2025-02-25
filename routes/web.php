<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectOrderController;
use App\Http\Controllers\ProjectScreenshotController;
use App\Http\Controllers\ProjectToolsController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{project:slug}', [FrontController::class, 'details'])->name('front.detail');
Route::get('/book', [FrontController::class, 'book'])->name('front.book');
Route::post('/book/save', [FrontController::class, 'store'])->name('front.book.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('projects', ProjectController::class);
        Route::resource('tools', ToolController::class);
        Route::resource('project_orders', ProjectOrderController::class);
        // Route::resource('project_tools', ProjectToolsController::class);

        Route::get('/tools/assign/{project}', [
            ProjectToolsController::class, 'create'
        ])->name('project.assign.tool');
        Route::post('/tools/assign/saved/{project}', [
            ProjectToolsController::class, 'store'
        ])->name('project.assign.tool.store');
        Route::delete('project_tools/{id}', [
            ProjectToolsController::class, 'destroy'
            ])->name('project_tools.destroy');
            
        Route::resource('project_screenshot', ProjectScreenshotController::class);
        Route::get('/screenshot/{project}', [
            ProjectScreenshotController::class, 'create'
            ])->name('project_screenshots.create');
        Route::post('/screenshot/saved/{project}', [
            ProjectScreenshotController::class, 'store'
            ])->name('project_screenshots.store');
        Route::delete('screenshot/{projectScreenshot}', [
            ProjectScreenshotController::class, 'destroy'
            ])->name('project_screenshots.destroy');
    });
});

require __DIR__.'/auth.php';
