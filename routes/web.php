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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/questions/{question}', 'QuestionController@index')->name('questions');

Route::post('/questions', 'QuestionController@store');

Route::post('/questions/{question}/answer', 'QuestionController@answer');
