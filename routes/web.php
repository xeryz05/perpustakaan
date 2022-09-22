<?php

use App\Http\Controllers\Admin\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;


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

Route::get('/details/{id}', 'DetailController@index')->name('detail');

Route::group(['middleware'=>['auth']], function(){

    // Route::DELETE('/favorite/{id}', 'FavoriteController@delete')->name('delete-favorite');
    // Route::get('/favorite', 'FavoriteController@index')->name('favorite');
    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

    Route::get('/dashboard-account', 'DashboardAccountController@account')
        ->name('dashboard-account');

    Route::POST('comentar-user','Admin\BookController@comment')
        ->name('commentar');

    Route::get('/my-profile/profile/dashboard-profile', 'DashboardAccountController@index')
        ->name('dashboard-profile');

    Route::get('/my-profile/profile/dashboard-profile-create', 'DashboardAccountController@uploadFoto')
        ->name('dashboard-profile-create');

    Route::post('/dashboard/account/{redirect}', 'DashboardAccountController@update')
        ->name('dashboard-account-redirect');

    Route::get('/tamu', 'TamuController@index')->name('tamu');
    Route::post('/tamu/store', 'TamuController@store')->name('tamu.store');

    Route::post('/details/{id}', 'DetailController@add')->name('detail-add');
    Route::get('/read/{id}', 'DetailController@read')->name('read');
});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function (){
        Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('book', 'BookController');
        // Route::get('/dashboard/export', 'DashboardController@export');
        Route::get('/admin/user/export', 'UserController@export');
        Route::get('/admin/book/export', 'BookController@export');
    });

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
