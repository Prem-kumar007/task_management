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

Route::group(['middleware'=>'redirect.authenticated'],function(){

    Route::get('login','AuthController@login')->name('login');
    Route::get('register','AuthController@register')->name('register');
});

 Route::post('login_post','AuthController@login_post')->name('login_post');
 Route::post('register_user','AuthController@register_user')->name('register_user');


 Route::middleware(['auth'])->group(function () {
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
    Route::post('/task_store', 'TaskController@store')->name('task_store');
    Route::get('/task_fetchall', 'TaskController@fetchAll')->name('task_fetchall');
    Route::post('/task_delete', 'TaskController@delete')->name('task_delete');
    Route::post('/task_edit', 'TaskController@edit')->name('task_edit');
    Route::post('/task_update', 'TaskController@update')->name('task_update');

    Route::get('logout','AuthController@logout')->name('logout');

});
