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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/getSalesTax/{state}/{zipcode}', 'SalesTaxController@getSalesTax');

Route::get('/faq', 'FaqController@index');
Route::get('/faq/{slug}', 'FaqController@show');

Route::post('/feedback', 'FeedbackController@store');

Route::post('/log', 'LogResultController@setLog');
Route::get('/log', 'LogResultController@getLogCount');