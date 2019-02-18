<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api'], function (){
	
});

//Import news feed from the resources API
Route::get('/newsfeed/import', 'newsfeedController@importNewsFeeds');
//Get news feed from DB
Route::get('/newsfeed/{feedType}', 'newsfeedController@getNewsFeed');
//Save new rating for feeds
Route::post('/ratings/save', 'ratingsController@saveRatings');
//Get the 5 best rated articles
Route::get('/ratings/topfive', 'ratingsController@getBestRatedArticles');

