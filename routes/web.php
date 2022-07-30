<?php

use App\Http\Controllers\Admin\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;
use Laravel\Socialite\Two\GoogleProvider;

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
Route::post('/details/{id}', 'DetailController@add')->name('detail-add');
Route::get('/read/{id}', 'DetailController@read')->name('read');

Route::group(['middleware'=>['auth']], function(){

    Route::DELETE('/favorite/{id}', 'FavoriteController@delete')->name('delete-favorite');
    Route::get('/favorite', 'FavoriteController@index')->name('favorite');

    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

    Route::get('/dashboard-account', 'DashboardAccountController@account')
        ->name('dashboard-account');

    Route::POST('comentar-user','Admin\BookController@comment')
        ->name('commentar');

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
        Route::resource('kalender', 'KalenderController');
        // Route::resource('book-asset', 'BookAssetController');
    });

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
