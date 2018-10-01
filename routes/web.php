<?php
use App\InventoryProductGroup;
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
Route::get('delete/{id}','BrandController@destroy');
Route::resource('/category','CategoryController');
Route::get('/delete/{id}','CategoryController@destroy');
Route::resource('/supplier','SupplierController');
Route::get('/delete/{id}','SupplierController@destroy');
