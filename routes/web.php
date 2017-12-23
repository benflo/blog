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


Route::get('/','WelcomeController@index');
Route::post('/','WelcomeController@commentaire');
//Route::get('/', 'WelcomeController@Commentaire');
Route::get('/article','ArticlesController@afficheArticles');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ajoutarticle','AjoutArticlesController@create')->name('ajoutarticle');
Route::post('/ajoutarticle','ArticlesController@store');
Route::post('/commentaire','CommentaireController@store');
//Route::resource('Articles', 'ArticlesController');