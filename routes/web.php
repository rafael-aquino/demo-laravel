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

Route::get('/', 'PageController@index');
Route::get('/producto/{producto}', 'PageController@producto');


Route::get('/contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'HomeController@usuarios')->name('usuarios');

Route::get('/login/{provider}', 'SocialController@redirect');
Route::get('/login/{provider}/callback','SocialController@Callback');
Route::resource('/productos', 'ProductosController');



