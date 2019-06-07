<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
/*************************RUTAS PUBLICAS******************************/
Route::get('/','FrontendController@home')->name('home');
Route::get('empresa','FrontendController@empresa')->name('empresa');
Route::group([ 'prefix' => 'productos'],function (){
    Route::get('/','FrontendController@categorias')->name('categorias');
    Route::get('categoria/{id}','FrontendController@categoriaproductos')->name('categoria');
    Route::get('subcategoria/{id}','FrontendController@subcategoria')->name('subcategoria');
    Route::get('producto/{id}','FrontendController@producto')->name('producto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
