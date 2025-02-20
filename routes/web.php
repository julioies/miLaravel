<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/tareas', [DatosController::class, 'index'])->name('tareas');


Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
   // Route::get('/adminOtraFuncionalidad', [AuthController::class, 'adminOtraFuncionalidad'])->name('adminOtraFuncionalidad');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
