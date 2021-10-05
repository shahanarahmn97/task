<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//data insertion
Route::post('/insertdata','App\Http\Controllers\dataController@dataInsertion')->name('insertdata');
//dataRetreval
Route::get('/dataRetreval','App\Http\Controllers\dataController@dataRetreval')->name('dataRetreval');