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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search']);
Route::post('/delete', [App\Http\Controllers\HomeController::class, 'delete']);
Route::post('/send', [App\Http\Controllers\MailController::class, 'send'])->name('mail');;
Route::get('/like/{id}', [App\Http\Controllers\HomeController::class, 'like'])->name('like');;



