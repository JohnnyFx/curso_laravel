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



$router->get('client', 'ClientController@index');
$router->post('client', 'ClientController@store');
$router->get('client/{id}', 'ClientController@show');
$router->put('client/{id}', 'ClientController@update');
$router->delete('client/{id}', 'ClientController@destroy');