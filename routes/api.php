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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('companyregister', 'App\Http\Controllers\CompanyController@postRegistration')->name('companyregister');
Route::post('companylogin', 'App\Http\Controllers\CompanyController@postLogin')->name('companylogin');
Route::get('products', 'App\Http\Controllers\ProductController@getProducts');
Route::get('companies', 'App\Http\Controllers\CompanyController@getCompanies');
Route::post('products1', 'App\Http\Controllers\ProductController@addProduct');
