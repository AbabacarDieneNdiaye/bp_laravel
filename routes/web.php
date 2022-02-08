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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@search')->name('search');


Route::get('/clientphysique/add', 'ClientPhysiqueController@add')->name('addclientp');
Route::get('/clientphysique/list', 'ClientPhysiqueController@getAll')->name('listclientp');
Route::post('/clientphysique/update', 'ClientPhysiqueController@update')->name('updateclientp');
Route::get('/clientphysique/delete/{id}', 'ClientPhysiqueController@delete')->name('deleteclientp');
Route::post('/clientphysique/persist', 'ClientPhysiqueController@persist')->name('persistclientp');


Route::get('/clientmoral/add', 'ClientMoralController@add')->name('addclientm');
Route::get('/clientmoral/list', 'ClientMoralController@getAll')->name('listclientm');
Route::post('/clientmoral/update', 'ClientMoralController@update')->name('updateclientm');
Route::get('/clientmoral/delete/{id}', 'ClientMoralController@delete')->name('deleteclientm');
Route::post('/clientmoral/persist', 'ClientMoralController@persist')->name('persistclientm');


Route::get('/compte/add', 'CompteController@add')->name('addcompte');
Route::get('/compte/list', 'CompteController@getAll')->name('listcompte');
Route::post('/compte/update', 'CompteController@update')->name('updatecompte');
Route::get('/compte/delete/{id}', 'CompteController@delete')->name('deletecompte');
Route::post('/compte/persist', 'CompteController@persist')->name('persistcompte');
