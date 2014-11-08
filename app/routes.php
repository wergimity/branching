<?php

Route::resource('sessions', 'SessionsController');
Route::get('/', 'HomeController@index');
Route::controller('ajax', 'AjaxController');