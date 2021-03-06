<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ordinateurs', 'OrdisController@display')->name('ordi');
Route::get('/ordinateurs/{id}' , 'OrdisController@ordinateurs')->where('id', '[0-9]+');

Route::get('/marques', 'MarquesController@display')->name('marque');
Route::get('/marques/{m}' , 'MarquesController@marque');



//Route::get('/comparateurPro', 'OrdisController@comparateur_pro');

Route::get('/search/{s}', 'SearchController@search');

