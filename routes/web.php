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
    return view('home');
});


Route::get('/recent-videos', 'App\Http\Controllers\HomeController@RecentVideos')->name('recent-videos');
Route::post('/getVideoDetails',array('uses'=>'App\Http\Controllers\HomeController@GetVideoDetails','as'=>'getVideoDetails'));