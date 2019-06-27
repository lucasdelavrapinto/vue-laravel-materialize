<?php
Route::get('/', 'TarefasController@index');
Route::get('/tarefas', 'TarefasController@tarefas')->name('tarefas');
