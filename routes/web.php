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

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::group([
    'as' => 'sample.',
    'prefix' => 'sample'
], function () {
    Route::get('/form', function () {
        return view('sample.form');
    })->name('form');
    Route::get('/basic-table', function () {
        return view('sample.basic_table');
    })->name('basic_table');
    Route::get('/data-table', function () {
        return view('sample.data_table');
    })->name('data_table');
});
