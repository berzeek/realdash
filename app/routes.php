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

// GET route
Route::get('login', function() {
  return View::make('login');
});
//POST route
Route::post('login', 'AccountController@login');

Route::get('logout', array('uses' => 'AccountController@logout'));

Route::get('dash', function(){ return View::make('dash');});

Route::controller('leads', 'LeadsController');

//Route::get('admin', function () {return View::make('admin');});
