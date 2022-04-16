<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->middleware('auth');

Route::resource('admin/item-type', 'App\Http\Controllers\Admin\ItemTypeController')->middleware('auth');
Route::resource('admin/role', 'App\Http\Controllers\Admin\RoleController')->middleware('auth');
Route::resource('admin/item-category', 'App\Http\Controllers\Admin\ItemCategoryController')->middleware('auth');
Route::resource('admin/items', 'App\Http\Controllers\Admin\ItemsController')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
