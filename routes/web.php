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
    Route::post('/add_auction', 'AuctionController@store')->name('auction_post');
    Route::get('/auction', 'PaintingController@index')->name('auction');
    Route::get('/showauction/{painting}', 'PaintingController@show')->name('showauction');
    Route::get('/change_id/{painting}', 'PaintingController@update')->name('change_id');
    Route::post('/bidding/{painting}', 'PaintingController@edit')->name('bidding');
    Route::get('/activity','ActivityController@index')->name('activity');
    Route::get('/your_auctions','ActivityController@yourAuctions')->name('your_auctions');
    Route::get('/winning_auctions','ActivityController@winningAuctions')->name('winning_auctions');
    Route::get('/solded_paintings/{painting}','ActivityController@soldedPainting')->name('solded_paintings');
    Route::get('/claim_paintings/{painting}','ActivityController@claimPainting')->name('claim_paintings');
});
