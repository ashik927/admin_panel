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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin',
            'middleware'=>['auth','admin']],
function(){
    Route::get('/', 'AdminController@admin');

    
    Route::get('addCategory', 'AdminController@addCategory');
    Route::get('allCategory', 'AdminController@allCategory');
    Route::get('editCategory', 'AdminController@editCategory');
    Route::get('allOrder', 'AdminController@allOrder');
    Route::get('editOrder', 'AdminController@editOrder');
    Route::get('settingsForm', 'AdminController@settingsForm');
    Route::get('addProduct', 'AdminController@addProduct');
    Route::get('editProduct', 'AdminController@editProduct');
    Route::get('allProduct', 'AdminController@allProduct');


});