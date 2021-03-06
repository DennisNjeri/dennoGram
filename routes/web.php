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
use App\Mail\NewUserEmail;


Auth::routes();
Route::get('/email',function(){
 return new NewUserEmail(); 
});
Route::post('/follow/{user}','FollowsController@store');
Route::get('/', 'PagesController@explorePosts')->name('homeLand');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'ProfileController@createProfile')->name('CreateProfile');
Route::get('/profile', 'ProfileController@viewProfile')->name('viewProfile');
Route::post('/homepost', 'PostController@store')->name('createPost');
Route::get('/posts/{postId}', 'PostController@show')->name('ViewPost');
Route::get('/deleteposts/{postId}', 'PostController@destroy')->name('deletePost');
Route::get('/posts', 'PostController@index')->name('allPosts');
Route::get('/userprofiles/{userid}', 'PagesController@userProfile')->name('Profiles');
Route::get('/editProfile', 'ProfileController@editProfile')->name('editProfile');
Route::get('/myfeeds', 'PostController@index')->name('UserFeed');
//Route::patch('/editUserProfile/{user}', 'ProfileController@newm ')->name('editProfile');
?>