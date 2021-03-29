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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\CompanyController::class, 'getCompanies'])->name('home');
Auth::routes();
// Route::get('companies', 'App\Http\Controllers\CompanyController')->name('companies');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 // Route::get('products', function () {return view('pages.products');})->name('products');
	 // Route::get('barcodes', function () {return view('pages.barcodes');})->name('barcodes');
	 Route::get('transactions', function () {return view('pages.transactions');})->name('transactions');
	 Route::get('sales', function () {return view('pages.sales');})->name('sales');
	 Route::get('reports', function () {return view('pages.reports');})->name('reports');
	 Route::get('finishedtransaction', function () {return view('pages.finishedtransaction');})->name('finishedtransaction');
	 // Route::get('companies', function () {return view('pages.companies', ['companies' => $companies]);})->name('company');
	 // Route::get('companies', function () {return view('pages.companies');})->name('company');
	Route::get('/home', 'App\Http\Controllers\CompanyController@getCompanies')->name('home');
	Route::get('companies', 'App\Http\Controllers\CompanyController@getAllCompanies')->name('company');
	Route::get('products', 'App\Http\Controllers\ProductController@getProducts')->name('products');
		Route::post('generatebarcodes', 'App\Http\Controllers\BarcodeController@makeBarcode')->name('generatebarcodes');
	Route::get('barcodes', 'App\Http\Controllers\BarcodeController@getBarcodes')->name('barcodes');
	Route::get('addbarcodes', 'App\Http\Controllers\BarcodeController@IssueBarcodes')->name('addbarcodes');
	 

	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	
});
