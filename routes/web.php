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

/**This is the root of the app */
Route::get('/', 'PageController@index');
Route::get('/student', 'StudentController@index');

Route::get('/home', function()
{
    return view('home');
});

// about us page route
Route::get('/about', 'PageController@about');

// conact us page route
Route::get('/contact', 'PageController@contact');

// about us page route
Route::get('/sports', 'PageController@sports');


// Route::get('/hello', function() {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
