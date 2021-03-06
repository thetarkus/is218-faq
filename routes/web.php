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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/answers/clap/{id}', 'AnswerController@clap')->name('answers.clap');

Route::resource('profiles', 'ProfileController');
Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswerController');
