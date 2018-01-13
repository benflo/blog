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
Auth::routes();

Route::get('/','WelcomeController@index')->name('welcome');
Route::post('/','WelcomeController@commentaire');
//Route::get('/', 'WelcomeController@Commentaire');
Route::get('/article','ArticlesController@afficheArticles');
Route::get('/commentaire','CommentairesController@update')->name('commentaire');
Route::put('/commentaire','CommentairesController@update')->name('commentaire');
Route::get('/images', 'ImagesController@index')->name('images');
Route::get('/commentaire/{id}','CommentairesController@destroy')->name('CommentaireDelete');



Route::get('/admin', 'HomeController@index')->name('admin');
// articles
Route::get('/ajoutarticle','ArticlesController@create')->name('ajoutarticle');
Route::post('/ajoutarticle','ArticlesController@store');
Route::post('/commentaire','CommentairesController@store');
Route::get('/article/{id}','ArticlesController@show')->name('article.show');
/**
 * Ajax call
 */
Route::post('ajoutarticle/ajax','ArticlesController@store');
//Route::resource('Articles', 'ArticlesController');