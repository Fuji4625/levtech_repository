<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@index');   
//Route::get('/posts', 'PostController@index');
//Route::get('/', function(){
//                return view('index');
//            });
Route::get('/posts/create', 'PostController@create');
//ブログの詳細表示
Route::get('/posts/{post}', 'PostController@show');
//DBへの投稿の登録
Route::post('/posts', 'PostController@store');
//ブログ投稿編集画面表示
Route::get('/posts/{post}/edit', 'PostController@edit');
//ブログ投稿編集実行
Route::put('/posts/{post}', 'PostController@update');



//いいね
Route::post('posts/{post}/favorites', 'FavoriteController@store')->name('favorites');
Route::post('posts/{post}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');

?>
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
