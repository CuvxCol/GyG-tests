<?php

use Illuminate\Support\Facades\Route;

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

/*Route::resource('Quiz','QuizController');*/
Route::get('doQuiz', 'DoQuizController')->name('doQuiz');
Route::get('/', 'SurveyedController@create')->name('surveyed.create');
Route::post('/surveyed/store', 'SurveyedController@store')->name('surveyed.store');