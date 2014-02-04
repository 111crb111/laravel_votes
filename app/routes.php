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
Route::controller('/v','VotesController');

// Route::get('/hello', function()
// {
// 	return View::make('hello');
// });
// Route::get('/showAll', function(){

// 	return Children::all();
// });
Route::get('ajax_votes', 'VotesController@getVotes');
Route::post('ajax_votes', 'VotesController@createVote');
Route::get('/', function(){

	return View::make('home.index');
});


