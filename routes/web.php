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



Route::get('/', 'App\Http\Controllers\HomeController@RecentVideos')->name('home');
Route::get('/single/{video_id}', 'App\Http\Controllers\SingleController@ShowSingleVideo')->name('single');
Route::post('/getRecentVideos',array('uses'=>'App\Http\Controllers\HomeController@GetRecentVideos','as'=>'getRecentVideos'));
Route::post('/getExcelVbaToturials',array('uses'=>'App\Http\Controllers\HomeController@GetExcelVbaToturials','as'=>'getExcelVbaToturials'));
Route::post('/getVbaLoops',array('uses'=>'App\Http\Controllers\HomeController@GetVbaLoops','as'=>'getVbaLoops'));
Route::post('/getTextToColumns',array('uses'=>'App\Http\Controllers\HomeController@GetTextToColumns','as'=>'getTextToColumns'));
Route::post('/getHyperlinks',array('uses'=>'App\Http\Controllers\HomeController@GetVbaHyperlinks','as'=>'getHyperlinks'));
Route::post('/getSorting',array('uses'=>'App\Http\Controllers\HomeController@GetVbaSorting','as'=>'getSorting'));
Route::post('/getVbaProjects',array('uses'=>'App\Http\Controllers\HomeController@GetVbaProject','as'=>'getVbaProjects'));
Route::get('/view-all/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllViedeos')->name('view-all');
Route::get('/view-all-videos/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllChildPlaylist')->name('view-all-videos');
Route::get('/add_description', 'App\Http\Controllers\AddDescription@LoadVideosDetails')->name('add_description');
Route::post('/insert_video_description','App\Http\Controllers\AddDescription@InsertVideoDescription')->name('insert_video_description');

Route::get('/contact-us','App\Http\Controllers\ContactUsController@GetContactUsPage')->name('contact-us');