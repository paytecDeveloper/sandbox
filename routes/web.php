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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Apply Middleware AUTH in the whole GROUP
Route::middleware(['auth'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');


    Route::prefix('address')->group(function(){
        Route::get('index', 'AddressController@index')->name('address.index');
        Route::post('create', 'AddressController@create')->name('address.create');
        Route::post('store', 'AddressController@store')->name('address.store');
    });
    //Route Prefixes
    Route::prefix('admin')->group(function(){
        Route::get('list', function(){echo "Matches the 'admin/list' URL";})->name('admin.list');
    });
});



