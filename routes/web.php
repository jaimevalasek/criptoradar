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

Auth::routes();

// Rotas do site
Route::get('/', 'HomeController@index')->name('home');
Route::get('/painel', 'HomeController@panel')->name('panel');

// Admin routes
Route::prefix('painel')
    ->namespace('panel')
    ->group(function() {

        // Card Info
        Route::get('card-info', 'CardInfoController@index')->name('card-info.index');
        Route::get('diario-de-investimento', 'DiaryInvestController@index')->name('diary-invest.index');
        Route::get('diario-de-investimento/novo', 'DiaryInvestController@create')->name('diary-invest.create');
        Route::post('diario-de-investimento', 'DiaryInvestController@store')->name('diary-invest.store');

    });


// Admin routes
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {

        // Admin
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');

        Route::get('/', 'AuthController@dashboard')->name('admin');
        Route::get('/login', 'AuthController@showLoginForm')->name('admin.login');
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        Route::post('/login/do', 'AuthController@login')->name('admin.login.do');

        // Users
        Route::get('user/list', 'UserController@index')->name('admin.user.index');
        Route::get('user/{id}/edit', 'UserController@edit')->name('admin.user.edit');
        Route::put('user/{id}', 'UserController@update')->name('admin.user.update');
        Route::get('user/{slug}/delete', 'UserController@destroy')->name('admin.user.destroy');

        // Content Types
        Route::get('content-type', 'ContentTypeController@index')->name('admin.content-type.index');
        Route::get('content-type/create', 'ContentTypeController@create')->name('admin.content-type.create');
        Route::get('content-type/{slug}/edit', 'ContentTypeController@edit')->name('admin.content-type.edit');
        Route::put('content-type/{slug}', 'ContentTypeController@update')->name('admin.content-type.update');
        Route::post('content-type', 'ContentTypeController@store')->name('admin.content-type.store');
        Route::get('content-type/{slug}/delete', 'ContentTypeController@destroy')->name('admin.content-type.destroy');

        // Content
        Route::get('content', 'ContentController@index')->name('admin.content.index');
        Route::get('content/create', 'Contentontroller@create')->name('admin.content.create');
        Route::get('content/{slug}/edit', 'ContentController@edit')->name('admin.content.edit');
        Route::put('content/{slug}', 'ContentController@update')->name('admin.content.update');
        Route::post('content', 'ContentController@store')->name('admin.content.store');
        Route::get('content/{slug}/delete', 'ContentController@destroy')->name('admin.content.destroy');

        // Product Types
        Route::get('product-type', 'ProductTypeController@index')->name('admin.product-type.index');
        Route::get('product-type/create', 'ProductTypeController@create')->name('admin.product-type.create');
        Route::get('product-type/{slug}/edit', 'ProductTypeController@edit')->name('admin.product-type.edit');
        Route::put('product-type/{slug}', 'ProductTypeController@update')->name('admin.product-type.update');
        Route::post('product-type', 'ProductTypeController@store')->name('admin.product-type.store');
        Route::get('product-type/{slug}/delete', 'ProductTypeController@destroy')->name('admin.product-type.destroy');

        // PlanPayment Types
        Route::get('plan-payment-type', 'PlanPaymentTypeController@index')->name('admin.plan-payment-type.index');
        Route::get('plan-payment-type/create', 'PlanPaymentTypeController@create')->name('admin.plan-payment-type.create');
        Route::get('plan-payment-type/{id}/edit', 'PlanPaymentTypeController@edit')->name('admin.plan-payment-type.edit');
        Route::put('plan-payment-type/{id}', 'PlanPaymentTypeController@update')->name('admin.plan-payment-type.update');
        Route::post('plan-payment-type', 'PlanPaymentTypeController@store')->name('admin.plan-payment-type.store');
        Route::get('plan-payment-type/{id}/delete', 'PlanPaymentTypeController@destroy')->name('admin.plan-payment-type.destroy');

    });
