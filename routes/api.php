<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/menu', 'MenuController@all');
Route::get('/extras', 'ExtrasController@all');
Route::post('/clients', 'ClientsController@store');
Route::post('/orders', 'OrdersController@store');
Route::get('/orders', 'OrdersController@all');
Route::post('/orderItems', 'OrderItemsController@store');
Route::get('/orderItems/{id}', 'OrderItemsController@findOne');