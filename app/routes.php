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
Route::get('inspiracion', 'HomeController@inspiracion');
Route::get('herramientas', 'HomeController@herramientas');
Route::get('documentacion', 'HomeController@documentacion');
Route::get('ipad', 'HomeController@getIpad');
Route::post('ipad', 'HomeController@postIpad');
Route::get('equipo', 'HomeController@equipo');
Route::get('faq', 'HomeController@faq');
Route::get('test', function(){
	require 'vendor/facebook/src/facebook.php';

    $facebook = new Facebook(array(
      'appId'  => '531422446938110',
      'secret' => '89f52f80fbb6f576677f67906c784171',
    ));

    // Get User ID
    if( $user = $facebook->getUser() ){
    	print_r($user);
    }else{
    	$url = $facebook->getLoginUrl();
    	print_r($url);
    }
});