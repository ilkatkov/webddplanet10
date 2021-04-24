<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

const PATH = "App\Http\Controllers\API\\";

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


Route::middleware('cors')->post('orders/store', PATH . 'OrderController@store')->name('storeMessage');


