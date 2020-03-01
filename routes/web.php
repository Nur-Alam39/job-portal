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
    return view('index');
});
/*Route::get('/jobs', function () {
    return view('jobs');
});*/

Route::get('/jobs', 'JobController@index');
Route::get('/jobs/create', 'JobController@create')->middleware('auth');
Route::post('/jobs/store', 'JobController@store');
Route::get('/jobs/show/{job_id}', 'JobController@show');
Route::get('/jobs/edit/{job_id}', 'JobController@edit')->middleware('auth');
Route::post('/jobs/update/{job_id}', 'JobController@update');
Route::get('/jobs/delete/{job_id}', 'JobController@destroy')->middleware('auth');

Auth::routes();

Route::get('/users/user_dashboard', 'HomeController@index')->name('home');
Route::get('/users/view_profile', 'HomeController@view_profile');
Route::get('/users/edit_profile', 'HomeController@edit_profile');


//Category Controller

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create')->middleware('auth');
Route::post('/categories/store', 'CategoryController@store');
Route::get('/categories/show/{category_id}', 'CategoryController@show');
Route::get('/categories/edit/{category_id}', 'CategoryController@edit')->middleware('auth');
Route::post('/categories/update/{category_id}', 'CategoryController@update');
Route::get('/categories/delete/{category_id}', 'CategoryController@destroy')->middleware('auth');

//Education Controller
Route::get('/users/education', 'EducationController@index');
Route::get('/users/education/create', 'EducationController@create')->middleware('auth');
Route::post('/users/education/store', 'EducationController@store');
Route::get('/users/education/show/{edu_id}', 'EducationController@show');
Route::get('/users/education/edit/{edu_id}', 'EducationController@edit')->middleware('auth');
Route::post('/users/education/update/{edu_id}', 'EducationController@update');
Route::get('/users/education/delete/{edu_id}', 'EducationController@destroy')->middleware('auth');
