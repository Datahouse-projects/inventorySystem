<?php
use App\InventoryProduct;
use App\InventoryOrderHeader;
use App\InventoryProductVariety;
use App\InventoryWarehouse;
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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/brand','BrandController');
Route::get('deletebrand/{id}','BrandController@destroy');
Route::resource('/category','CategoryController');
Route::get('/deletecategory/{id}','CategoryController@destroy');
Route::resource('/supplier','SupplierController');
Route::get('/deletesupplier/{id}','SupplierController@destroy');
Route::resource('/product','ProductController');
Route::get('/deleteproduct/{id}','ProductController@destroy');
Route::resource('/item','ItemController');
Route::get('/deleteitem/{id}','ItemController@destroy');
Route::resource('/order','OrderController');
Route::get('/deleteorder/{id}','OrderController@destroy');
Route::resource('/warehouse','WarehouseController');
Route::get('/deletewarehouse/{id}','WarehouseController@destroy');


