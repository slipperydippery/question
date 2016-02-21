<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::resource('posts', 'PostsController');
    Route::resource('quests', 'QuestsController');
    Route::post('quests/reorder/', ['as' => 'questions.reorder', 'uses' => 'QuestionsController@reorder']);
    Route::get('questions/createforquest/{quest}', ['as' => 'questions.createforquest', 'uses' => 'QuestionsController@create']);
    Route::get('questions/createfortemplate/{template}', ['as' => 'questions.createfortemplate', 'uses' => 'QuestionsController@createfortemplate']);
    Route::resource('templates', 'TemplatesController');
    Route::resource('questions', 'QuestionsController');
    Route::resource('answertypes', 'AnswertypesController');
    Route::post('answeroptions/reorder/', ['as' => 'answeroptions.reorder', 'uses' => 'AnsweroptionsController@reorder']);
    Route::get('answeroptions/createforquestion/{question}', ['as' => 'answeroptions.createforquestion', 'uses' => 'AnsweroptionsController@create']);
    Route::resource('answeroptions', 'AnsweroptionsController');
    Route::get('users/{users}/sheets', ['as' => 'users.sheets', 'uses' => 'SheetsController@index']);
    Route::get('users/{users}/sheet/{sheets}', ['as' => 'users.sheets.show', 'uses' => 'SheetsController@show']);
    Route::get('sheet/create/{quests}', ['as' => 'sheets.create', 'uses' => 'SheetsController@create']);
    Route::get('users/{users}/sheet/create/{quests}', ['as' => 'users.sheets.create', 'uses' => 'SheetsController@createforuser']);
    Route::post('sheets', ['as' => 'sheets.store', 'uses' => 'SheetsController@store']);

    Route::get('/', function () {
        return view('home');
    });
});
