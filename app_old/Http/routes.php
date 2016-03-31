<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add','API@add');
Route::post('/map','API@map');
Route::get('/map','Pages@map');
Route::get('/viewcoords','Pages@showcoords');
Route::get('/viewstudents','Pages@showstudents');


Route::group(['middleware' => 'auth'], function () {

Route::get('/form','Pages@form');
Route::post('/form','API@form');
Route::get('/clearstudentstable','Pages@deletestudents');

});