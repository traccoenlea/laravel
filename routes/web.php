<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ordinateurs', 'OrdisController@display')->name('ordi');

Route::get('/marques', 'MarquesController@display')->name('marque');

Route::get('/ordinateurs/{id}' , 'OrdisController@ordinateurs')->where('id', '[0-9]+');

//Route::get('/comparateurPro', 'OrdisController@comparateur_pro');

Route::get('/search/{s}', 'SearchController@search');

<<<<<<< HEAD



Route::get('/truc', 'OrdisController@index')->name('ordi');

Route::get('/test', 'TestController@helloworld');
//Route::get('/testshowList', 'TestController@showList');
Route::get('/testBis', 'TestController@addFilter');
//Route::get('/test{element}', 'TestController@listOf');



Route::get('/comparateurPro', 'OrdisController@helloworld');
Route::get('/showAll/{composant}', 'OrdisController@showAll');
=======
>>>>>>> a74920258784637efe87ab311eef7d638cdbf400
