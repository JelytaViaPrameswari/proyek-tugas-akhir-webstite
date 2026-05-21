<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('/admin/menu', [MenuController::class, 'index'])->name('admin.menu.index');
Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu/store', [MenuController::class, 'store'])->name('admin.menu.store');
