<?php

namespace App\Http\Controllers;
//chamo o model para recuperar;
use App\Models\Event;
use Illuminate\Http\Request;

class EventControllerLogin extends Controller
{
    //rota principal action
    public function index(){
               //para retornar os dados do banco e preciso criar um model atraves do php artisa make:model (nome da minha model);

          $eventos = Event::all();


     return view('welcome', ['Events' => $eventos]);
}
  //minha create
   public function create(){
    return view('events.create');
  }
 //para criar controlles php artisan make:controller ((nome do controller))


 //CRIANDO FUNCAO PARA RECERBER O POST

  public function store(Request $formulario){

     $eventoss = new Event;

     //dd($formulario->all());
     $eventoss->title = $formulario->title;
     $eventoss->description = $formulario->description;
     $eventoss->city = $formulario->city;
     $eventoss->private = $formulario->private;
    $eventoss->save();

     return redirect('/');

 }
}
