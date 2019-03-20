<?php

Route::middleware(['cors'])->group(function () {
  Route::get('/todo/index', 'TodoController@index');
  Route::post('/todo/add', 'TodoController@add');
  Route::post('/todo/delete', 'TodoController@delete');
  Route::post('/todo/toggleState', 'TodoController@toggleState');
});
