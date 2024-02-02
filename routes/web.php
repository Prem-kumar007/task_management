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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::middleware(['auth'])->group(function () {
Route::get('/', 'HomeController@dashboard');
Route::get('/dashboard','HomeController@dashboard')->name('dashboard');
Route::get('/account_statement','HomeController@account_statement')->name('account_statement');
Route::get('fund_transfer','HomeController@fund_transfer')->name('fund_transfer');

Route::get('/subject','SubjectController@get_subject_data')->name('subject');
Route::get('/data_table','DatatableController@list_table')->name('data_table');
Route::get('form_validation','HomeController@form_validate')->name('form_validation');



// Employee Management

    Route::get('/employee', 'EmployeeController@index')->name('employee');
    Route::post('/store', 'EmployeeController@store')->name('store');
    Route::get('/emp_fetchall', 'EmployeeController@fetchAll')->name('emp_fetchall');
    Route::post('/delete', 'EmployeeController@delete')->name('delete');
    Route::post('/edit', 'EmployeeController@edit')->name('edit');
    Route::post('/update', 'EmployeeController@update')->name('update');

// Task Management
    
    Route::get('/task', 'TaskController@index')->name('task');
    Route::post('/store', 'TaskController@store')->name('store');
    Route::get('/fetchall', 'TaskController@fetchAll')->name('fetchAll');
    Route::post('/delete', 'TaskController@delete')->name('delete');
    Route::post('/edit', 'TaskController@edit')->name('edit');
    Route::post('/update', 'TaskController@update')->name('update');


//}
