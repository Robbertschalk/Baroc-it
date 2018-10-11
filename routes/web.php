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

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
=======
>>>>>>> Dev

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
<<<<<<< HEAD
route::get('/sales', 'SalesController@sales');

route::get('/sales', 'SalesController@sales')->name('refresh.sales');

Route::post('/sales_add_client', 'SalesController@insert')->name('client.add');

Route::get('/finance', 'FinanceController@index')->name('finance');

=======
Route::get('/sales', 'SalesController@sales');

Route::get('/dev', 'DevelopmentController@dev');
>>>>>>> Dev
=======
Route::get('/sales', 'SalesController@sales');

Route::get('/finance', 'FinanceController@finance');
>>>>>>> fin
