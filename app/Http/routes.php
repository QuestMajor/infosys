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

/*Route::get('/', function () {
    return view('welcome');
});*/
//FRONTEND
Route::any('', 'FrontendController_Home@index');
Route::any('/home', function(){
	return view('pages.home');
	});
Route::any('/flights', function(){
	return view('pages.flights');
	});
Route::any('/hotels', function(){
	return view('pages.hotels');
	});
Route::any('/car-rentals', function(){
	return view('pages.carrentals');
	});
Route::any('/guided-tours', function(){
	return view('pages.guidedtours');
	});
Route::any('/contact-us', function(){
	return view('pages.contactus');
	});
Route::any('/about-us', function(){
	return view('pages.aboutus');
	});
Route::any('/adhome', function(){
	return view('pages.adhome');
	});
Route::any('/adflights', function(){
	return view('pages.adflights');
	});
Route::any('/adhotels', function(){
	return view('pages.adhotels');
	});
Route::any('/adcar-rentals', function(){
	return view('pages.adcarrentals');
	});
Route::any('/adguided-tours', function(){
	return view('pages.adguidedtours');
	});
Route::any('/adcontact-us', function(){
	return view('pages.adcontactus');
	});
Route::any('/adabout-us', function(){
	return view('pages.adaboutus');
	});
Route::any('/login', function(){
	return view('pages.login');
	});
Route::get('incorrect', function () {
    return redirect('pages.home');
});
Route::any('/admin', 'loginController@login');
