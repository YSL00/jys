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

/*
|	Unauthenicated Group, POST
*/
Route::group(array('before' => 'guest'), function(){

	/*
	|	CSRF check
	*/
	Route::group(array('before' => 'csrf'), function(){

		/*
		|	Post to /submitContact, handles form submission on the Contact Me page
		*/
		Route::post('/submitContact', array('as' => 'post_contact', 'uses' => 'ContactController@sendEmail'));

		/*
		|	Post to /submitComment, handles form submission on the Suggestion Box page
		*/
		Route::post('/submitComment', array('as' => 'post_comment', 'uses' => 'SuggestionsController@post_comment'));
	});

});

/*
|	GET Home page
*/
Route::get('/', array('as'=>'get_home', 'uses' => 'HomePageController@home'));
// Route::get('/', array('as'=>'get_home', 'uses' => 'ConstructionController@underConstruction'));

/*
|	GET Contact page
*/
Route::get('/contact', array('as' => 'get_contact', 'uses' => 'ContactController@contact'));

/*
|	GET About page
*/
Route::get('/about', array('as' => 'get_about', 'uses' => 'AboutController@get_about'));

/*
|	GET Suggestions page
*/
Route::get('/suggestions', array('as' => 'get_suggestions', 'uses' => 'SuggestionsController@get_suggestions'));