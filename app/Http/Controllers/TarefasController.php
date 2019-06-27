<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;


class TarefasController extends Controller
{
    public function index(){
        return View::make('welcome');
    }

    public function tarefas(){
        return View::make('tarefas');
    }
}
