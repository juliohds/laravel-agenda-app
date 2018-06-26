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

Route::group(['prefix'=>'pessoas'], function(){
    Route::get("/", "pessoasController@index");
    Route::get("/novo", "pessoasController@novoView");
    Route::get("/{id}/editar", "pessoasController@editarView");
    Route::post("/update", "pessoasController@update");
    Route::post("/store", "pessoasController@store");
    Route::get("/{id}/excluir", "pessoasController@excluirView");
    Route::get("/{id}/destroy", "pessoasController@destroy");
});

Route::get("/", function() {
    return view("template.app");
});
