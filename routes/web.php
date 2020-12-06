<?php

use Illuminate\Support\Facades\Route;
// Login
Route::group(['middleware' => 'guest'], function(){
    Route::get('/', function () {
        return view('auth.login');
    });
});
Auth::routes();

// dashboard
Route::prefix('menu')->name('menu.')->middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    // CashierAccess
    Route::group(['middleware' => 'CekLevel:kasir'], function(){
        // Cashier
        Route::prefix('cashier')->name('cashier.')->group(function(){
            Route::get('/', 'CashierController@index')->name('index');
            Route::get('/pay/{id}', 'CashierController@pay')->name('pay');
            Route::post('/purchase', 'CashierController@purchase')->name('purchase');
        });
    });
    // ManagerAccess
    Route::group(['middleware' => 'CekLevel:manager'], function(){
        // Cashier
        Route::prefix('manager')->name('manager.')->group(function(){
            Route::geT('/','ManagerController@index')->name('index');
            Route::get('/stock','ManagerController@stock')->name('stock');
            Route::get('/date','ManagerController@date')->name('date');
        });
    });
    // AdminAccess
    Route::group(['middleware' => 'CekLevel:admin'], function(){
        // User
        Route::prefix('user')->name('user.')->group(function(){
            Route::get('/', 'UserController@index')->name('index');
            Route::post('/store', 'UserController@store')->name('store');
            Route::delete('/delete/{id}', 'UserController@destroy')->name('delete');
            Route::get('/search/', 'UserController@search')->name('search');
        });
        // barang
        Route::prefix('goods')->name('goods.')->group(function(){
            Route::get('/', 'GoodsController@index')->name('index');
            Route::post('/store', 'GoodsController@store')->name('store');
            Route::delete('/delete/{id}', 'GoodsController@destroy')->name('delete');
            Route::get('/edit/{id}', 'GoodsController@edit')->name('edit');
            Route::put('/update/{id}', 'GoodsController@update')->name('update');
            Route::get('/search/', 'GoodsController@search')->name('search');
        });
        // merek
        Route::prefix('merk')->name('merk.')->group(function(){
            Route::get('/', 'MerkController@index')->name('index');
            Route::post('/store', 'MerkController@store')->name('store');
            Route::delete('/delete/{id}', 'MerkController@destroy')->name('delete');
            Route::get('/edit/{id}', 'MerkController@edit')->name('edit');
            Route::put('/update/{id}', 'MerkController@update')->name('update');
            Route::get('/search/', 'MerkController@search')->name('search');
        });
        // distributor
        Route::prefix('distributor')->name('distributor.')->group(function(){
            Route::get('/', 'DistributorController@index')->name('index');
            Route::post('/store', 'DistributorController@store')->name('store');
            Route::delete('/delete/{id}', 'DistributorController@destroy')->name('delete');
            Route::get('/edit/{id}', 'DistributorController@edit')->name('edit');
            Route::put('/update/{id}', 'DistributorController@update')->name('update');
            Route::get('/search/', 'DistributorController@search')->name('search');
        });
    });
});
