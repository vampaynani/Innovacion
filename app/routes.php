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
Route::get('/', 'HomeController@welcome');
Route::get('premio', 'HomeController@premio');
Route::get('inspiracion/{id?}', 'HomeController@inspiracion');
Route::get('herramientas/{id?}', 'HomeController@herramientas');
Route::get('documentacion/{id?}', 'HomeController@documentacion');
Route::get('ipad', 'HomeController@getIpad');
Route::post('ipad', 'HomeController@postIpad');
Route::get('equipo', 'HomeController@equipo');
Route::get('faq', 'HomeController@faq');
Route::get('download/{file}', 'HomeController@download');
Route::post('feed', 'HomeController@feed');
Route::controller('admin', 'AdminController');