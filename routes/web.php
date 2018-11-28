<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@show');


Route::get('/products', 'ProductController@index');
Route::get('/products/search', 'ProductController@search');
Route::get('/products/create', 'ProductController@create');  // formulario
Route::post('/products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');  // formulario
Route::post('/products/{id}/edit', 'ProductController@update');
Route::post('/products/{id}/delete', 'ProductController@destroy');

Route::get('/product_categories', 'ProductCategoryController@index');
Route::get('/product_categories/create', 'ProductCategoryController@create');  // formulario
Route::post('/product_categories', 'ProductCategoryController@store');
Route::get('/product_categories/{id}/edit', 'ProductCategoryController@edit');  // formulario
Route::post('/product_categories/{id}/edit', 'ProductCategoryController@update');
Route::post('/product_categories/{id}/delete', 'ProductCategoryController@destroy');

Route::get('/product_types', 'ProductTypeController@index');
Route::get('/product_types/create', 'ProductTypeController@create');  // formulario
Route::post('/product_types', 'ProductTypeController@store');
Route::get('/product_types/{id}/edit', 'ProductTypeController@edit');  // formulario
Route::post('/product_types/{id}/edit', 'ProductTypeController@update');
Route::post('/product_types/{id}/delete', 'ProductTypeController@destroy');



