<?php

use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

  Route::get('/admin/run-migrations/todo-test-2026-x9Kp72', function () {
    Artisan::call('optimize:clear');
    $output = Artisan::output();

    Artisan::call('migrate', [
        '--force' => true,
    ]);
    $output .= Artisan::output();

    return '<pre>' . $output . '</pre>';
});

Route::middleware(['auth'])->group(function () {
    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');
    Route::put('settings/appearance', [Settings\AppearanceController::class, 'update'])->name('settings.appearance.update');

    //To-Do
     Route::get('new-todo', [TodoController::class, 'create'])->name('todos.create');
     Route::post('todos', [TodoController::class, 'store'])->name('todo.store');
     Route::get('todos', [TodoController::class, 'index'])->name('todos.index');

});

require __DIR__.'/auth.php';
