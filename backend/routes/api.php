<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api'], function (){
	
});

Route::get('/newsfeed/import', 'newsfeedController@getNewsFeeds');
