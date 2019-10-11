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

Route::get('/', 'HomeController@index');
Route::get('/activities', 'ActivitiesController@index');
Route::get('/members', 'MembersController@index');
Route::get('/achievements', 'AchievementsController@index');
Route::get('/rulesbylaws', 'RulesBylawsController@index');
Route::get('/aboutus', 'AboutUsController@index');



