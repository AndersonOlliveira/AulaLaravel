<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventControllerLogin extends Controller
{
    //rota principal action
    public function index(){

         $nome = "anderson";
         $idade = 123;


     return view('welcome', ['nome' => $nome, 'idade' => $idade]);
}
  //minha create
   public function create(){
    return view('events.create');
  }
 //para criar controlles php artisan make:controller ((nome do controller))
}
