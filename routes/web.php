<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios','UserController@index')->name('users');

Route::get('/usuarios/{user}','UserController@show')->where('user','[0-9]+')->name('user.show');
Route::get('/usuarios/{user}/editar','UserController@edit')->name('editarUser');
Route::put('/usuarios/{user}','UserController@update')->name('updateUser');
Route::get('/usuarios/nuevo','UserController@create')->name('nuevoUser');

Route::delete('/usuarios/{user}','UserController@destroy')->name('borrarUser');
Route::post('/usuarios/crear','UserController@store')->name('crearUser');

//Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');


Route::get('/carros','UserController@carro')->name('carros');

Route::get('/carros/{carro}','UserController@showcar')->where('carro','[0-9]+')->name('carid');

Route::get('/carros/nuevo','UserController@createCar');

Route::post('/carros/crear','UserController@process');

Route::delete('/carros/{carro}','UserController@borrarCar')->name('dropCar');
Route::get('/carros/{carro}/editar','UserController@editCar')->name('editarCar');
Route::put('/carros/{carro}','UserController@updateCar')->name('updatCar');


