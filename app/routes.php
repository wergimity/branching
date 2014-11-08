<?php

Route::resource('sessions', 'SessionsController');
Route::get('logout', 'SessionsController@logout')->before('auth');
Route::get('/', 'HomeController@index');
Route::controller('ajax', 'AjaxController');