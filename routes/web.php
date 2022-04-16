<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/item-type', 'App\Http\Controllers\Admin\ItemTypeController');
Route::resource('admin/role', 'App\Http\Controllers\Admin\RoleController');
Route::resource('admin/item-category', 'App\Http\Controllers\Admin\ItemCategoryController');
Route::resource('admin/items', 'App\Http\Controllers\Admin\ItemsController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
