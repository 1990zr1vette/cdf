<?php

//Event::listen('illuminate.query', function($sql)
//{
	//echo $sql . '<br>';
   // dd([
   //     $query,  // prepared statement
    //    $params, // query params (? symbols will be replaced with)
   //     $time    // execution time
   // ]);
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// ****************************** ADMIN ****************************** //
Route::resource('admin/inventory', 'InventoryController');

Route::resource('admin/admin', 'AdminController');

Route::resource('admin/brands', 'BrandController');
Route::resource('admin/brandproducts', 'BrandProductController');
Route::resource('admin/brands.products', 'BrandProductController');

Route::resource('admin/products', 'ProductController');
Route::resource('admin/types', 'TypeController');
Route::resource('admin/products.types', 'TypeController');

Route::resource('admin/brands.products.inventory', 'InventoryController');
Route::resource('admin/inventory', 'InventoryController');
// ****************************** ADMIN ****************************** //


// ****************************** HOME ****************************** //
Route::get('/', 'HomeController@home');
Route::get('home', 'HomeController@home');
Route::get('acceuil', 'HomeController@acceuil');
// ****************************** HOME ****************************** //

// ****************************** ABOUT US ****************************** //
Route::get(ABOUTUS, 'AboutUsController@aboutus');
Route::get(ABOUTUS_FR, 'AboutUsController@aboutusfr');

Route::get(ABOUTUS . '/' . CULTURE, 'AboutUsController@culture');
Route::get(ABOUTUS_FR . '/' . CULTURE, 'AboutUsController@culturefr');

Route::get(ABOUTUS . '/' . EXPERIENCE, 'AboutUsController@experience');
Route::get(ABOUTUS_FR . '/' . EXPERIENCE_FR, 'AboutUsController@experiencefr');

// ****************************** ABOUT US ****************************** //

// ****************************** BRANDS ****************************** //
Route::get('brands', 'BrandController@brands');
Route::get('marques', 'BrandController@marques');

Route::get('brands/{brand}/{id}', 'BrandController@brand');
Route::get('marques/{brand}/{id}', 'BrandController@marque');

Route::get('brands/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@brandProductEn');
Route::get('marques/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@brandProductFr');
// ****************************** BRANDS ****************************** //

// ****************************** PRODUCTS ****************************** //
Route::get('products/{product}/{id}', 'ProductController@products');
Route::get('produits/{product}/{id}', 'ProductController@produits');


Route::get('products/{product}/{type}/{pid}/{tid}', 'ProductController@entypes');
Route::get('produits/{product}/{type}/{pid}/{tid}', 'ProductController@frtypes');
// ****************************** PRODUCTS ****************************** //

// ****************************** TEST ****************************** //
Route::get('test', 'TestController@index');
Route::get('test/brands', 'TestController@brands');
Route::get('test/products', 'TestController@products');
// ****************************** TEST ****************************** //

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
