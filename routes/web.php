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

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.form');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::post('admin/contacts', [App\Http\Controllers\ContactController::class, 'delete'])->name('contact.delete');
Route::get('/admin/contacts', [App\Http\Controllers\ContactController::class, 'allContacts'])->name('allcontacts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
