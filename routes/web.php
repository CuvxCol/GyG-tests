<?php

use Illuminate\Support\Facades\Route;

Route::get('doQuiz/{quiz}/{registry}/{question}', 'DoQuizController')->name('doQuiz');

Route::post('answer_registry/store', 'AnswerRegistryController@store')->name('answer_registry.store');

Route::get('/', 'SurveyedController@create')->name('surveyed.create');
Route::post('/surveyed/store', 'SurveyedController@store')->name('surveyed.store');

Route::post('/registry/store','RegistryController@store')->name('registry.store');