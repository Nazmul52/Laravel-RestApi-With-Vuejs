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
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');


});


Route::apiResource('employee', 'EmployeeController');
Route::apiResource('supplier', 'SupplierController');
Route::apiResource('category', 'CategoryController');
Route::apiResource('product', 'ProductController');
Route::apiResource('expense', 'ExpenseController');
Route::apiResource('customer', 'CustomerController');
Route::post('/salary/paid/{id}', 'SalaryController@paid');
Route::get('salary', 'SalaryController@index');
Route::get('salary/view/{id}', 'SalaryController@viewSalary');
Route::get('/edit/salary/{id}', 'SalaryController@editSalary');
Route::post('/update/salary/{id}', 'SalaryController@updateSalary');
Route::post('/stock/edit/{id}', 'ProductController@updateStock');
Route::get('getting/product/{id}', 'POSController@index');

Route::get('/addToCart/{id}', 'CartController@addToCart');
