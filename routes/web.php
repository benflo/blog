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

Route::get('/article','ArticlesController@afficheArticles');
Route::get('/images', 'ImagesController@index')->name('images');


// articles
Route::get('/ajoutarticle','ArticlesController@create')->name('article.add');
Route::post('/ajoutarticle','ArticlesController@store');
Route::post('/commentaire','CommentairesController@store');
Route::get('/admin/article/delete/{id}','ArticlesController@delete')->name('article.delete');
Route::get('/admin/article/edit/{id}', 'ArticlesController@editView')->name('article.edit');
Route::post('/admin/article/edit/{id}', 'ArticlesController@edit')->name('article.edit');
Route::get('/admin/article/{id}','ArticlesController@show')->name('article.show');
Route::post('/admin/article/activation/{id}','ArticlesController@activation')->name('article.activation');

// admin
Route::get('/admin', 'HomeController@index')->name('admin');
// commentaires
Route::get('/admin/commentaire/{id}','CommentairesController@show')->name('commentaire.edit');
Route::post('/admin/commentaire/{id}','CommentairesController@update')->name('commentaire.edit');
Route::get('/admin/commentaire/delete/{id}','CommentairesController@delete')->name('commentaire.delete');

/**
 * Ajax call
 */
Route::post('ajoutarticle/ajax','ArticlesController@store');
