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
  return View::make('form');
});

Route::post('/registration', function() {
  $data = Input::all();

  $rules = array(
    'username' => 'required|alpha_num|min:3|max:32',
    'email'    => 'required|email',
    'password' => 'required|confirm|min:3'
  );

  $validator = Validator::make($data, $rules);

  if ($validator->passes()) {
    // IT PASSED!

    return 'Data was* saved';
  }

  // Bad validation
  return Redirect::to('/')->withErrors($validator);
});