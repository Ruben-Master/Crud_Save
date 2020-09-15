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
Auth::routes();


Route::get('/', function () {
    return view('index');
});

Route::get('/principal', function () {
    return view('index');
})->name('Index');

Route::get('/crud', function (){
return view('crud.table');
})->name('Crud');

Route::get('/formulario', function (){
    return view('crud.form');
  })->name('Formulario');



Route::get('/home', 'HomeController@index')->name('home');
