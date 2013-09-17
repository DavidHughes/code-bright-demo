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

Route::get('/', array(
  function() {
	 return View::make('home');
  })
);

Route::get('example', function() {
  return View::make('example');
});

Route::get('first', array(
  'as' => 'first',
  function() {
    return View::make('first');
  })
);

Route::get('second', function() {
  return View::make('second');
});

Route::get('third', function() {
  return View::make('third');
});

Route::get('fourth', function() {
  return View::make('fourth');
});

Route::group(array('prefix'=>'books'), 
  function() {
    // First Route  
    Route::get('/first', function() { return 'The Colour of Magic'; });
    // Second Route
    Route::get('/second', function() { return 'Reaper Man'; });
    // Third Route
    Route::get('/third', function() { return 'Lords and Ladies'; });
});