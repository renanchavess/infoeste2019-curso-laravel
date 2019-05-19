<?php


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::resource('produto', 'ProdutoController');
Route::get('foto/{produto_id}', 'FotoController@create')->name('foto.create');
Route::post('foto', 'FotoController@store')->name('foto.store');
Route::post('foto/{id}', 'FotoController@destroy')->name('foto.destroy');
Route::get('produto/{id}/fotos', 'ProdutoController@fotos')->name('produto.fotos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
