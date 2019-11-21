<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('createUser', 'UserController@store');

Route::get('getUsers','UserController@getUsers');

Route::post('createClient', 'ClientController@testLivraison');

Route::get('login','UserController@loginPage');
Route::post('login','UserController@login');
Route::get('register','UserController@registerPage');
Route::post('register','UserController@store');

Route::resources([
    'users' => 'UserController',
    'vehicules' => 'VehiculeController',
    'produits' => 'ProduitController',
    'locations' => 'LocationController'
]);
