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

Route::get('/', ['as'=>'','uses'=>'PdfDemoController@index'],function () {
    return view('welcome');
});


Route::get('/sample-pdf', ['as'=>'SamplePDF','uses'=>'PdfDemoController@samplePDF']);

Route::get('/main', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/form', function () {
    return view('form');
});