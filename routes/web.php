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
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/jobs', 'JobController@index');
Route::get('/jobs/create', 'JobController@create');
Route::post('/jobs/store', 'JobController@store');
Route::get('/jobs/show/{job_id}', 'JobController@show');
Route::get('/jobs/edit/{job_id}', 'JobController@edit');
Route::post('/jobs/update/{job_id}', 'JobController@update');
Route::get('/jobs/delete/{job_id}', 'JobController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
