<?php

Route::get('/', 'HomeController@getIndex');

Route::get('/peopleForm', 'HomeController@getPeople');
Route::post('/peopleForm', 'HomeController@postPeople');

Route::get('/textForm', 'HomeController@getText');
Route::post('/textForm', 'HomeController@postText');


