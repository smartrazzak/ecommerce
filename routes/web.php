<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

 Route::get('/ecom', function () {
    return view('frontend.layouts.home');
});


Route::get('/site-config', 'BackendController@index')->name('site-config.index');

 Route::get('/site-config/{id}', 'BackendController@edit');
 Route::post('/site-config/{id}', 'BackendController@update')->name('site-config.update');




 /* Route::get('/product', 'ProductController@index')->name('product.index');

 Route::get('/product/create', 'ProductController@create')->name('product.create');

 Route::post('/product', 'ProductController@store')->name('product.store');

 Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');

 Route::put('/product/{id}', 'ProductController@update')->name('product.update');

 Route::delete('/product/{id}', 'ProductController@destroy')->name('product.destroy'); */



//Category Route
 Route::get('/category', 'CategoryController@index')->name('category.index');

 Route::get('/category/create', 'CategoryController@create')->name('category.create');

 Route::post('/category', 'CategoryController@store')->name('category.store');

 Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');

 Route::put('/category/{id}/', 'CategoryController@update')->name('category.update');

 Route::delete('/category/{id}/', 'CategoryController@destroy')->name('category.destroy');


 //SubCategory Route
 Route::get('/subCategory', 'SubCategoryController@index')->name('subCategory.index');
 Route::get('/subcategory/create', 'SubCategoryController@create')->name('subcategory.create');
 
 Route::post('/subcategory', 'SubCategoryController@store')->name('subcategory.store');

 Route::get('/subcategory/{id}/edit', 'SubCategoryController@edit')->name('subcategory.edit');

 Route::patch('/subcategory/{id}', 'SubCategoryController@update')->name('subcategory.update');

 Route::delete('/subcategory/{id}', 'SubCategoryController@destroy')->name('subcategory.destroy');


  //Child SubCategory Route
  Route::get('/childsubcategory', 'ChildSubCategoryController@index')->name('childsubcategory.index');
  Route::get('/childsubcategory/create', 'ChildSubCategoryController@create')->name('childsubcategory.create');
  
  Route::post('/childsubcategory', 'ChildSubCategoryController@store')->name('childsubcategory.store');
 
  Route::get('/childsubcategory/{id}/edit', 'ChildSubCategoryController@edit')->name('childsubcategory.edit');
 
  Route::patch('/childsubcategory/{id}', 'ChildSubCategoryController@update')->name('childsubcategory.update');
 
  Route::delete('/childsubcategory/{id}', 'ChildSubCategoryController@destroy')->name('childsubcategory.destroy');

 //Sliders Route
  Route::resource('sliders', 'SliderController');

   //Brands Route
  Route::resource('brands', 'BrandController');

   //Product Route
   Route::resource('products', 'ProductController');


