<?php

use App\Http\Controllers\PostController;
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

Route::controller(PostController::class)->group(function () {
    Route::get('/','index')->name('home');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{post}','edit')->name('edit');
    Route::post('/update/{post}','update')->name('update');
    Route::get('/delete/{post}','destroy')->name('destroy');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
