<?php

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
Route::get('/','ListingsController@index');

Route::get('/new', 'ListingsController@new')->name('new');

Route::post('/listings','ListingsController@store');

Route::get('/listingsedit/{id}','ListingsController@edit');

Route::post('/listing/edit','ListingsController@update');

Route::get('listingsdelete/{id}','ListingsController@destroy');

Route::get('/listing/{id}/card/new','CardsController@new');

Route::post('/card/add/{listing_id}','CardsController@add');

Route::get('/listing/{listing_id}/card/{card_id}','CardsController@detail');

Route::get('/cardsedit/{card_id}','CardsController@edit');

Route::post('/card/edit','CardsController@update');

Route::get('cardsdelete/{card_id}','CardsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
