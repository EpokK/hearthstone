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
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'));

// route to display deck list
Route::get('deck', array('uses' => 'HomeController@showDecklist'));

// route to show deck builder
Route::get('deck/create', array('uses' => 'HomeController@showDeckbuilder'));

// route to display a deck
Route::get('deck/show/{id}', array('uses' => 'HomeController@showDeck'));
