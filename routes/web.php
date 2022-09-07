<?php

use App\Http\Controllers\LoginController;
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



Route::resource('login', LoginController::class)->only(['index', 'show', 'post', 'update']);
Route::post("logout", [LoginController::class, "logout"])->name("logout");

// ============= admin ================
Route::group([
    'as' => 'admin.',
    'prefix' => 'admin'
], function () {
    // 
});


// ============= client ================
Route::group([
    'as' => 'client.',
], function () {
    // 
});


// ============= starter page ================
Route::get('/', fn () => (redirect()->route('dashboard')))->name('home');
Route::get('/dashboard', fn () => (view('admin.dashboard')))->name('dashboard');
Route::group([
    'as' => 'sample.',
    'prefix' => 'sample'
], function () {
    Route::get('/top-nav', fn () => (view('sample.topnav')))->name('topnav');
    Route::get('/top-nav-side', fn () => (view('sample.topnavside')))->name('topnavside');
    Route::get('/form', fn () => (view('sample.form')))->name('form');
    Route::get('/basic-table', fn () => (view('sample.table')))->name('table');
    Route::get('/data-table', fn () => (view('sample.dataTables')))->name('dataTables');
});
