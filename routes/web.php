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

Route::get('/', function () {
    return view('welcome');
});
//
// Route::group(['middleware' => 'auth'], function () {
//        Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    // Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    // Route::get('admin', function () {
    //     $data = [];
    //     return view('admin', $data);
    // })->name('admin');
    // //
    // Route::get('about', 'AboutController@index')->name('about');
    // Route::post('admin', 'MasterController@import')->name('admin');
    //
    // Route::get('charts', 'ChartsController@stt');
    // Route::get('charts', 'ChartController@index')->name('chart.index');

    Route::get('create-chart','ChartController@makeChart');
//
// });
