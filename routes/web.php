<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

//Route user

Route::get('/usuarios','UserController@index')->name('usuario.index');

Route::get('/usuarios/nuevo', 'UserController@create')->name('usuario.create');
Route::post('/usuarios/nuevo', 'UserController@storage')->name('usuario.storage');

Route::get('/usuarios/edit/{email}', 'UserController@edit')->name('usuario.edit');
Route::patch('/usuarios/{email}', 'UserController@update')->name('usuario.update');

Route::get('/usuarios/{email}', 'UserController@show')->name('usuario.show');

Route::get('/saludo/{nombre}/{apodo?}','WelcomeUserController@index')->name('saludo');

//Eliminar
Route::delete('/usuarios/{email}/','UserController@destroy')->name('usuario.destroy');

//Route profession
Route::get('/profession','ProfessionController@index')->name('profession.index');

Route::get('/profession/nuevo', 'ProfessionController@create')->name('profession.create');
Route::post('/profession', 'ProfessionController@store')->name('profession.storage');

Route::get('/profession/edit/{profession}', 'ProfessionController@edit')->name('profession.edit');
Route::patch('/profession/{profession}', 'ProfessionController@update')->name('profession.update');

//Eliminar
Route::delete('/profession/{profession}/','ProfessionController@destroy')->name('profession.destroy');

