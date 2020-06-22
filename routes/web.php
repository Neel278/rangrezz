<?php

use Illuminate\Support\Facades\Auth;
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
})->name('index');

Route::get('/image-gallery', 'imageGalleryController@index')->name('image-gallery');
Route::get('/contact-us', 'ContactController@index')->name('contact');

Auth::routes();
// Route::get('/register', function () {
//     return view('user.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('user.login');
// })->name('login');

Route::get('/home', 'HomeController@index')->name('home');
