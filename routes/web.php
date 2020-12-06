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

Route::post('/getRecentVideos',array('uses'=>'App\Http\Controllers\HomeController@GetRecentVideos','as'=>'getRecentVideos'));
Route::post('/getExcelVbaToturials',array('uses'=>'App\Http\Controllers\HomeController@GetExcelVbaToturials','as'=>'getExcelVbaToturials'));
Route::post('/getVbaLoops',array('uses'=>'App\Http\Controllers\HomeController@GetVbaLoops','as'=>'getVbaLoops'));
Route::post('/getTextToColumns',array('uses'=>'App\Http\Controllers\HomeController@GetTextToColumns','as'=>'getTextToColumns'));
Route::post('/getHyperlinks',array('uses'=>'App\Http\Controllers\HomeController@GetVbaHyperlinks','as'=>'getHyperlinks'));
Route::post('/getSorting',array('uses'=>'App\Http\Controllers\HomeController@GetVbaSorting','as'=>'getSorting'));
Route::post('/getVbaProjects',array('uses'=>'App\Http\Controllers\HomeController@GetVbaProject','as'=>'getVbaProjects'));

Route::get('/single/{video_id}', 'App\Http\Controllers\SingleController@ShowSingleVideo')->name('single');


Route::get('/view-all/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllViedeos')->name('view-all');
Route::get('/view-all-videos/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllChildPlaylist')->name('view-all-videos');
Route::get('/add_description', 'App\Http\Controllers\AddDescription@LoadVideosDetails')->name('add_description');
Route::post('/insert_video_description','App\Http\Controllers\AddDescription@InsertVideoDescription')->name('insert_video_description');

Route::post('/get-video-text-description',array('uses'=>'App\Http\Controllers\SingleController@GetVideoTextDescription','as'=>'get-video-text-description'));

Route::get('/contact-us','App\Http\Controllers\ContactUsController@GetContactUsPage')->name('contact-us');
Route::post('/send-contact-us','App\Http\Controllers\ContactUsController@ContactUsPost')->name('send-contact-us');

Route::get('/about-us','App\Http\Controllers\AboutUsController@GetAboutUs')->name('about-us');

Route::post('/user-sign-up','App\Http\Controllers\SignUpController@UserSignUp')->name('user-sign-up');
Route::get('/is-user-available',array('uses'=>'App\Http\Controllers\SignUpController@IsUserAvailable','as'=>'is-user-available'));


Route::post('/user-sign-in','App\Http\Controllers\SignUpController@UserSignIn')->name('user-sign-in');
Route::get('/user_existance',array('uses'=>'App\Http\Controllers\SignUpController@CheckUserExistance','as'=>'user_existance'));

Route::get('/logout', 'App\Http\Controllers\HomeController@Logout')->name('logout');

Route::get('login/google/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);




Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);


Route::post('/videos-search','App\Http\Controllers\SearchController@SearchVideos')->name('videos-search');


Route::get('/copyright',function(){
    return view('copyright');
})->name('copyright');


Route::get('/privacy',function(){
    return view('privacy');
})->name('privacy');

Route::get('/terms',function(){
    return view('terms');
})->name('terms');


Route::post('post-comment','App\Http\Controllers\CommentsController@AddComment')->name('post.comment');

Route::post('post-comment-reply','App\Http\Controllers\CommentsController@ReplyComment')->name('post.comment.reply');

Auth::routes();


