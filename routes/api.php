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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
Route::post('/users', function (Request $request) {
    $persons = [
        ['name' => 'test1', ],
        ['name' => 'test2', ],
    ];
    array_push($persons, ["name" => $request->input('name')]);
    return $request;
});
Route::get('/users', function (Request $request) {
    return [['user' => '1'], ['user' => '2']];
});

Route::post('/login', 'App\Http\Controllers\Api\LoginController@login');

Route::group(['prefix' => 'tasklists'], function () {
    return [
        Route::middleware('auth:api')->get('/', 'App\Http\Controllers\TaskListController@get'),
        Route::middleware('auth:api')->post('/', 'App\Http\Controllers\TaskListController@create'),
    ];
});
