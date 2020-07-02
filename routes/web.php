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

Route::get('/', [
   'uses'=> 'FirstController@index',
   'as'=> '/'
]);

Route::get('/student/add-student',[
    'uses'=>'StudentController@index',
    'as'  =>'add-student'
]);

Route::post('/student/new-student',[
    'uses'=>'StudentController@newStudent',
    'as'  =>'new-student'
]);

Route::get('/student/view-student',[
    'uses'=>'StudentController@viewStudent',
    'as'  =>'view-student'
]);

Route::get('/student/edit-student/{id}',[
    'uses'=>'StudentController@editStudent',
    'as'  =>'edit-student'
]);
Route::post('/student/update-student',[
    'uses'=>'StudentController@updateStudent',
    'as'  =>'update-student'
]);

Route::get('/student/delete-student/{id}',[
    'uses'=>'StudentController@deleteStudent',
    'as'  =>'delete-student'
]);














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
