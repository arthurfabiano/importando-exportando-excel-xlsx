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
    return view('welcome');
});

Route::resource('admin/clients', 'App\Http\Controllers\Admin\ClientsController');
Route::get('clients/all/excel', ['App\Http\Controllers\Admin\ClientsController', 'allClientsExcel']);
Route::get('clients/search/excel', ['App\Http\Controllers\Admin\ClientsController', 'searchClientsExcel']);

Route::post('clients/import/excel', ['App\Http\Controllers\Admin\ClientsController', 'importClientsExcel']);
