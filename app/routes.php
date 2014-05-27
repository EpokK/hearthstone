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

// route to show the login form
Route::get('login', array('uses' => 'AccountController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'AccountController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'AccountController@doLogout'));

// route to display deck list
Route::get('deck', array('uses' => 'HomeController@showDecklist'));

// route to show deck builder
Route::get('deck/create', array('uses' => 'HomeController@showDeckbuilder'));

// route to display a deck
Route::get('deck/{id}', array('uses' => 'HomeController@showDeck'));

// route to delete a deck
Route::post('deck/{id}/delete', array('uses' => 'HomeController@deleteDeck'));

// route to add card in a deck
Route::post('deck/{deck_id}/add/{card_id}', array('uses' => 'HomeController@addCard'));

// route to remove card in a deck
Route::post('deck/{deck_id}/delete/{card_id}', array('uses' => 'HomeController@deleteCard'));
