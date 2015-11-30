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
    //return view('welcome');
     return view('app.gooxx');
});

Route::get('go', function () {
    return view('app.gooxx');
});

Route::group(['prefix' => 'test', 'namespace' => 'Gooxx'], function()
{
    Route::get('/', 'GooxxMainController@index');
     Route::post('/', 'GooxxMainController@index');

});