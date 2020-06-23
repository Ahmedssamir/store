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
    return view('welcome');});

###################################################
Route::get('sa/{id}','Hoscontroller@sa')->name('sa');
Route::resource('apps', 'Appcontroller');
######################################################
Auth::routes();
#################################################
Route::get('re','ccontroller@sigh');
########################################

Route::get('sa/{hospital_id}','Hoscontroller@sa')->name('sa');
Route::get('hospital/{id}','Hoscontroller@delete')->name('hospital');
Route::get('doctors/{hospital_id}','Hoscontroller@doctors')->name('hoss');

Route::get('hhospital','Hoscontroller@hospital');