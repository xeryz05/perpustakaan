<?php

use App\Http\Controllers\Admin\DashboardController;
use GuzzleHttp\Middleware;
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
Route::get('/categories/search', 'CategoryController@search');

Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::post('/read/{id}', 'ReadController@index')->name('read');


Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');


Route::group(['middleware'=>['auth']], function(){

    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

    Route::get('/dashboard-read', 'DashboardReadController@index')
        ->name('dashboard-read');

    Route::get('/dashboard-read-details', 'DashboardReadDetailsController@index')
        ->name('dashboard-read-details');

    Route::get('/dashboard-account', 'DashboardAccountController@account')
        ->name('dashboard-account');
    Route::get('/dashboard-profile', 'DashboardAccountController@index')
        ->name('dashboard-profile');
    Route::get('/dashboard-profile-create', 'DashboardAccountController@update')
        ->name('dashboard-profile-create');
    Route::post('/dashboard/account/{redirect}', 'DashboardAccountController@update')
        ->name('dashboard-account-redirect');

});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function (){
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('book', 'BookController');
        Route::resource('book-asset', 'BookAssetController');
    });

Auth::routes();


