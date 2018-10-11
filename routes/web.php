<?php

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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD

route::get('/sales', 'SalesController@sales');

=======
Route::get('/sales', 'SalesController@sales');
>>>>>>> fin
route::get('/sales', 'SalesController@sales')->name('refresh.sales');

Route::post('/sales_add_client', 'SalesController@insert')->name('client.add');

<<<<<<< HEAD
Route::get('/finance', 'FinanceController@index')->name('finance');


Route::get('/sales', 'SalesController@sales');

Route::get('/dev', 'DevelopmentController@dev');

Route::get('/sales', 'SalesController@sales');

Route::get('/finance', 'FinanceController@finance');

=======

Route::get('/finance', 'FinanceController@finance');
route::get('/finance', 'FinanceController@finance')->name('refresh.finance');
>>>>>>> fin
