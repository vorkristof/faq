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

// Home page
Route::get('/', 'PagesController@home');

// List questions
Route::get('/questions', 'PagesController@questions');

// Ask question
Route::get('/ask', 'PagesController@ask');

// Authentication routes
Auth::routes();

// Add question
Route::post('/ask', 'QuestionsController@add');

// Show questions
Route::get('/question/{question}', 'QuestionsController@show');

// Edit question
Route::get('/question/{question}/edit', 'QuestionsController@edit');
Route::patch('/question/{question}', 'QuestionsController@update');

// Delete question
Route::get('/question/{question}/delete', 'QuestionsController@delete');
Route::delete('/question/{question}', 'QuestionsController@destroy');

//Add answer
Route::post('/question/{question}/answer', 'AnswersController@add');

// Edit answer
Route::get('/question/{question}/{answer}/edit', 'AnswersController@edit');
Route::patch('/question/{question}/{answer}', 'AnswersController@update');

// Delete answer
Route::get('/question/{question}/{answer}/delete', 'AnswersController@delete');
Route::delete('/question/{question}/{answer}', 'AnswersController@destroy');

