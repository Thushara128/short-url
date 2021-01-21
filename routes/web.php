<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('shorten-link',[ShortLinkController::Class,'index']);
Route::post('shorten-link', [ShortLinkController::Class,'store'])->name('generate.shorten.link.post');
   
Route::get('{code}', [ShortLinkController::Class,'shortenLink'])->name('shorten.link');
Route::get('/delete/{id}',[ShortLinkController::Class,'delete']);
