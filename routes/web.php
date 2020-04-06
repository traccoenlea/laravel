<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ordinateurs', 'OrdisController@display')->name('ordi');

Route::get('/article/{id}' , 'OrdisController@article')->where('id', '[0-9]+');
	