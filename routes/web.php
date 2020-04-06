<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ordinateurs', 'OrdisController@display')->name('ordi');

Route::get('/ordinateurs/{id}' , 'OrdisController@ordinateurs')->where('id', '[0-9]+');

Route::get('/comparateurPro', 'OrdisController@comparateur_pro');
	