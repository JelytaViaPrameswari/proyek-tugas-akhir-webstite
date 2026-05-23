<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [\App\Http\Controllers\MenuController::class, 'halamanUtama'])->name('home');

Route::get('profil', function () {
    return view('profil');
});

Route::get('/admin/menu', [MenuController::class, 'index'])->name('admin.menu.index');
Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu/store', [MenuController::class, 'store'])->name('admin.menu.store');
Route::delete('/admin/menu/{id}', [App\Http\Controllers\MenuController::class, 'destroy'])->name('admin.menu.destroy');
Route::get('/admin/menu/{id}/edit', [App\Http\Controllers\MenuController::class, 'edit'])->name('admin.menu.edit');
Route::put('/admin/menu/{id}', [App\Http\Controllers\MenuController::class, 'update'])->name('admin.menu.update');