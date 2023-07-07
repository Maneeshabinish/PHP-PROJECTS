<?php

$router-> get('','PagesController@home');

$router-> get('About','PagesController@about');

$router-> get('Contact','PagesController@contact');

$router-> get('About/culture','controllers/About-culture.php');

$router-> get( 'users','UsersController@index');

$router-> post( 'users','UsersController@store');

$router-> get( 'dayplanner','DayPlannerController@index');

$router-> post( 'dayplanner','DayPlannerController@store');


