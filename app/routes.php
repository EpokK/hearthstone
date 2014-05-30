<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	if(Auth::check()) {
		return Redirect::route('deck');
	} else {
		return Redirect::route('login');
	}
});

// route to show the login form
Route::get('/login', array('as' => 'login', 'uses' => 'AccountController@showLogin'));

// route to process the login form
Route::post('/login', array('as' => 'login', 'uses' => 'AccountController@doLogin'));

// route to logout
Route::get('/logout', array('as' => 'logout', 'uses' => 'AccountController@doLogout'));

// route to show the subscribe form
Route::get('/subscribe', array('as' => 'subscribe', 'uses' => 'AccountController@showSubscribe'));

// route to process the subscribe form
Route::post('/subscribe', array('as' => 'subscribe', 'uses' => 'AccountController@doSubscribe'));

Route::group(array('prefix' => 'deck', 'before' => 'auth'), function() {
	// route to display deck list
	Route::get('/', array('uses' => 'HomeController@showDecklist'));

	// route to show deck builder
	Route::get('/create', array('uses' => 'HomeController@showDeckbuilder'));

	// route to display a deck
	Route::get('/{id}', array('uses' => 'HomeController@showDeck'));

	// route to delete a deck
	Route::post('/{id}/delete', array('uses' => 'HomeController@deleteDeck'));

	// route to add card in a deck
	Route::post('/{deck_id}/add/{card_id}', array('uses' => 'HomeController@addCard'));

	// route to remove card in a deck
	Route::post('/{deck_id}/delete/{card_id}', array('uses' => 'HomeController@deleteCard'));
});