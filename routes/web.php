<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ordinateurs', 'OrdisController@display')->name('ordi');

Route::get('/ordinateurs/{id}' , 'OrdisController@ordinateurs')->where('id', '[0-9]+');

Route::get('/comparateurPro', 'OrdisController@comparateur_pro');

Route::get('/search/{s}', 'SearchController@search');




Route::get('/truc', 'OrdisController@index')->name('ordi');

Route::get('/test', 'TestController@helloworld');
Route::get('/testshowList', 'TestController@showList');
Route::get('/testBis', 'TestController@addFilter');
//Route::get('/test{element}', 'TestController@listOf');

