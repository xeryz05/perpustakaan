<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::get('/read/{id}', 'ReadController@index')->name('read');


Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard-read', 'DashboardReadController@index')->name('dashboard-read');
Route::get('/dashboard-read-details', 'DashboardReadDetailsController@index')->name('dashboard-read-details');
Route::get('/dashboard-account', 'DashboardAccountController@index')->name('dashboard-account');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function (){
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
    });

Auth::routes();


