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
    'uses' => 'TodosController@index'
])->name('todo');


Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete'
])->name('todo.delete');

Route::post('/create/todo', [
    'uses' => 'TodosController@store'
])->name('todo.store');

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update'
])->name('todo.update');


Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save'
])->name('todo.save');


Route::get('/todo/complete/{id}', [
    'uses' => 'TodosController@complete'
])->name('todo.complete');