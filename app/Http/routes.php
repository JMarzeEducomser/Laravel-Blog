<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function () {
    $form = "<form action='hola' method='post'>".
        "<input type='hidden' name='_token' value='".csrf_token()."'/>".
        "<input type='hidden' name='_method' value='put'/>".
        "<input type='submit'/>".
        "</form>";
    return $form;
});

Route::post('hola', function () {
    return "POST!!!";
});

Route::put('hola', function () {
    return "PUT!!!";
});

// Ruta que responde por controlador
Route::get('controlador/{parametro?}', 'PruebaController@funcion');

// Rutas para Categoria
Route::resource('categoria', 'CategoriaController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    // Rutas para Posts
    Route::resource('post', 'PostController');
});

// Ruta para acceder a los archivos de imagen (storage)
Route::get('post/{nombreImagen}', 'PostController@getImagen')->name('post.imagen');

// Ruta para PDF
//Route::get('post/{post}/reporte', 'PdfController@reporte')->name('post.reporte')->middleware('admin');
Route::get('post/{post}/reporte', 'PdfController@reporte')->name('post.reporte');

Route::auth();

Route::get('/home', 'HomeController@index');
