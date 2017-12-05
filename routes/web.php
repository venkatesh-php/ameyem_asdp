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
    return view('welcome');
});

Route::get('/people', function () {
    return view('People');
});

Route::get('/tools', function () {
    return view('Tools');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/assign_a_task', function () {
    return view('assign_a_task');
});







Route::get('post/create', 'PostController@create');

Route::post('post', 'PostController@store');
Route::post('post', 'ProfileController@index');
Route::post('post', 'SkillsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/skills', 'SkillsController@index')->name('skills');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
