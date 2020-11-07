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

/* get methods */

Route::get('/','WelcomeController@indexPage');
Route::get('/status','CustomerStatusController@addStatus');
Route::get('/view-status','CustomerStatusController@viewStatus');
Route::get('/view-customer','CustomerController@viewCustomer');
Route::get('/order-details','OrderController@viewOder');

/*post method*/

Route::post('/status','CustomerStatusController@createStatus')->name('status.add');
