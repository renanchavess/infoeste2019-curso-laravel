<?php


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::resource('produto', 'ProdutoController');
