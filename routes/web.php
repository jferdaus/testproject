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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'FrontController@index');
Auth::routes();


/*
Route::get('/', 'HomeController@index');
Auth::routes();

*/

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');


//Students Route Start 


//Route::get('/student/save', 'StudentController@index');

//Route::post('/student/save', 'StudentController@save');


Route::get('save', 'TeacherController@index')->name('save');


//Route::post('/teacher/insert', 'TeacherController@save');

Route::post('insert', 'TeacherController@save');