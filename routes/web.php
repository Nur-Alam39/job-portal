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
Route::get('/jobs/create', 'JobController@create');
Route::post('/jobs/store', 'JobController@store');
Route::get('/jobs/show/{job_id}', 'JobController@show');
Route::get('/jobs/edit/{job_id}', 'JobController@edit');
Route::post('/jobs/update/{job_id}', 'JobController@update');
Route::get('/jobs/delete/{job_id}', 'JobController@destroy');

Auth::routes();

//Job Seeker- User
Route::get('/users/user_dashboard', 'HomeController@index')->name('home');
Route::get('/users/view_profile', 'HomeController@view_profile');
Route::get('/users/edit_profile', 'HomeController@edit_profile');
Route::get('/users/public_profile/{user_id}', 'HomeController@public_profile');


//Employeer
Route::get('/employeers/dashboard', 'EmployeerController@index');
Route::get('/users/view_profile', 'HomeController@view_profile');
Route::get('/users/edit_profile', 'HomeController@edit_profile');

//Category Controller

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');
Route::get('/categories/show/{category_id}', 'CategoryController@show');
Route::get('/categories/edit/{category_id}', 'CategoryController@edit');
Route::post('/categories/update/{category_id}', 'CategoryController@update');
Route::get('/categories/delete/{category_id}', 'CategoryController@destroy');

//User Personal Information
Route::resource('/users/personalinfo', 'PersonalinfoController');

//Education Controller
Route::get('/users/education', 'EducationController@index');
Route::get('/users/education/create', 'EducationController@create');
Route::post('/users/education/store', 'EducationController@store');
Route::get('/users/education/show/{edu_id}', 'EducationController@show');
Route::get('/users/education/edit/{edu_id}', 'EducationController@edit');
Route::post('/users/education/update/{edu_id}', 'EducationController@update');
Route::get('/users/education/delete/{edu_id}', 'EducationController@destroy');


///New Multiauth
Route::get('/login/employeer', 'Auth\LoginController@showEmployeerLoginForm');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
Route::get('/register/employeer', 'Auth\RegisterController@showEmployeerRegisterForm');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/employeer', 'Auth\LoginController@employeerLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/register/employeer', 'Auth\RegisterController@createEmployeer');
Route::post('/register/user', 'Auth\RegisterController@create');

Route::view('/home', 'home')->middleware('auth');
Route::view('/employeer', 'employeer');
Route::view('/user', 'user');

//Job application
Route::get('/apply/{job_id}', 'ApplicationController@create');
Route::get('/employees/applicants/{job_id}', 'ApplicationController@show_applicants');



