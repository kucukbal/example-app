<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
// use Vendor\laravel\framework\src\Illuminate\Auth;

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

Auth::routes();

// Erdi ye <sorulacak> route yapisi
Route::post('/follow/{user}', 'App\Http\Controllers\FollowsController@store');
Route::get('/p/create', 'App\Http\Controllers\PostController@create');
Route::get('/p/{post}', 'App\Http\Controllers\PostController@show');
Route::post('/p', 'App\Http\Controllers\PostController@store');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');