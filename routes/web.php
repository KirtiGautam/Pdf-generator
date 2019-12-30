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

Route::get('/form', ['as'=>'form','uses'=>'PdfDemoController@index']);


Route::post('/Training form', ['as'=>'training-form','uses'=>'PdfDemoController@samplePDF']);

Route::get('/', function () {
    return view('main');
});

Route::get('/login', ['as'=>'login','uses'=>'loginController@index']);

Route::get('/register', ['as'=>'register','uses'=>'registerController@index']);

Route::post('/submit',["as"=>'auth', 'uses'=> 'loginController@auth'] );

Route::get('/user',["as"=>'user', 'uses'=> 'userController@index']);