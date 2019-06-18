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

//Route::get('/home', 'HomeController@index')->name('home');
/*************************RUTAS ADM******************************/
Route::group(['prefix' => 'adm'],function (){
    Route::view('/',  'adm.dashboard.index');
    Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
        Route::get('{seccion}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
        Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
        Route::get('{seccion}/list', ['uses' => 'Adm\SliderController@list', 'as' => '.list']);
        Route::get('edit/{slider}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
        Route::post('update/{slider}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
        Route::get('destroy/{slider}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
    });

    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{section}/{type}', ['uses' => 'Adm\ContentController@index', 'as' => '.index']);
        Route::get('{section}/{type}/create', ['uses' => 'Adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'Adm\ContentController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ContentController@update', 'as' => '.update']);
        Route::get('/eliminar/lista/{section}/{contenido}', ['uses' => 'Adm\ContentController@delete', 'as' => '.delete']);
    });

    // PRODUCTOS
    Route::group(['prefix' => 'productos', 'as' => 'productos'], function() {
        Route::get('{general}', ['uses' => 'Adm\ProductController@index', 'as' => '.index']);
        Route::get('crear/productos/{general}', ['uses' => 'Adm\ProductController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ProductController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\ProductController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ProductController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\ProductController@delete', 'as' => '.destroy']);
    });

    // GALERIAS DE PRODUCTOS
    Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {
        Route::get('{id}', ['uses' => 'Adm\GaleryController@index', 'as' => '.index']);
        Route::get('crear/galeria/{id}', ['uses' => 'Adm\GaleryController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\GaleryController@store', 'as' => '.store']);
        Route::get('{id}/edit', ['uses' => 'Adm\GaleryController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\GaleryController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\GaleryController@destroy', 'as' => '.destroy']);
    });
   /* Route::group(['prefix' => 'pedidos', 'as' => 'pedidos'], function() {
        Route::get('pedidos', ['uses' => 'Adm\OrderController@index', 'as' => '.index']);

    });*/
    // FAMILIA
    Route::group(['prefix' => 'familia', 'as' => 'familia'], function() {
        Route::get('{general}', ['uses' => 'Adm\FamilyController@index', 'as' => '.index']);
        Route::get('crear/familia/{general}', ['uses' => 'Adm\FamilyController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\FamilyController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\FamilyController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\FamilyController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\FamilyController@delete', 'as' => '.destroy']);
    });
    //Route::get('familia/{general}','Adm\FamilyController@index')->name('fami.index');
    //Route::resource('familia','Adm\FamilyController');
    Route::resource('metadatos','Adm\MetadataController');
    Route::resource('usuario','Adm\UserController');
});