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

Route::get('/', function () {
    return view('welcome');
});



Route::view('issus', 'issues.index');


Route::post('issus/store','IssuesController@store');
Route::get('test','IssuesController@test');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('servise', 'servise');


Route::get('custom/login' , 'CustomAuthController@login');

Route::get('custom/login{id}', 'CustomAuthController@Customlogin');

Route::get('issus/list', 'IssuesController@list');

Route::get('users', 'UsersController@export');

Route::post('issus/import', 'IssuesController@importFromExcel');
Route::view('issus-form', 'excel-import');



