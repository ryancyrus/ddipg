<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/bos', 'PagesController@bos');
Route::get('/admissions', 'PagesController@admsn');
Route::get('/academics', 'PagesController@academics');
Route::get('/administration', 'PagesController@administration');

Route::get('/vcmsg', 'PagesController@vcm');
Route::get('/contact', 'PagesController@contact');
Route::get('/home', 'PagesController@index');
Route::get('/campus', 'PagesController@campus');
Route::get('/stures', 'PagesController@stures');
Route::get('/cvmakr','PagesController@resumemakr');

Route::get('nstrack/sent', 'NotesheetsController@sent');
ROute::get('nstrack/receive', 'NotesheetsController@receive');
Route::resource('nstrack', 'NotesheetsController');
Route::get('/result', 'ResultsController@index');

Route::get('qnaforum/sent', 'ThreadsController@sent');
Route::get('qnaforum/receive', 'ThreadsController@receive');
Route::resource('qnaforum', 'ThreadsController');

Route::resource('events', 'EventsController');
// Route::get('feedback/create', ['as' => 'feedback', 'uses' => 'FeedbacksController@create']);
Route::get('feedback', ['as' => 'feedback.create', 'uses' => 'FeedbacksController@create']);
Route::post('feedback', 'FeedbacksController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
