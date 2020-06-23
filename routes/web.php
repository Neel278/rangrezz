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

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::patch('/settings/edit-profile', 'SettingsController@editProfile')->name('settings.profile');
    Route::put('/settings/edit-email', 'SettingsController@editEmail')->name('settings.email');
    Route::put('/settings/edit-password', 'SettingsController@editPassword')->name('settings.password');
    Route::get('/add_auction', 'AuctionController@index')->name('add_auction');
    Route::post('/add_auction', 'AuctionController@create')->name('auction_post');
});
