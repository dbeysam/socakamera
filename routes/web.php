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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

 //Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('camera', 'CameraController');
Route::resource('penjualan', 'PenjualanController');
Route::get('/laporan', 'PenjualanController@laporan');
