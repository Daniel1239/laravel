<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

#Index principal donde se mostraran las categorias
Route::get('/home', 'HomeController@index');
#Ruta para crear una categoria
Route::get('/home/createCategories', 'CatalogoController@index');

#Ruta para enviar los datos de la categoria por POST
Route::post('/home', 'CatalogoController@createCategory');

#ruta para enviar a ver los productos
Route::get('home/createProducts', 'CatalogoController@createProducts');
