<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return view('welcome');
});
Route::get('play','SentencesController@play');
Route::get('answer','SentencesController@answer')->name('answer');
Route::get('result','SentencesController@result')->name('result');
Route::resource('sentences','SentencesController');
Route::get('sentences/{id}/edit_image','SentencesController@edit_image')->name('sentences.edit_image');
