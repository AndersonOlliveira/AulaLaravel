<?php

namespace App\Http\Controllers;
//chamo o model para recuperar;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\Services\MinhaServico;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class EventControllerLogin extends Controller
{
    //rota principal action
    public function index(){
               //para retornar os dados do banco e preciso criar um model atraves do php artisa make:model (nome da minha model);
      $search = request('search');
      if($search){

         $eventos = Event::where(
           [['title', 'like', '%'.$search.'%']]
         )->get();
      }else{

        $eventos = Event::all();

      }


     return view('welcome', ['Events' => $eventos, 'search' => $search]);
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
     //quando o dado for em json(precisa passar no model para que ele possa reconhecer que e um array e salvar no banco)
     $eventoss->items =$formulario->items;
     $eventoss->date = $formulario->date;


       //pegando o user fica com erro porem não atrapalha o site funcionar
       //auth()->user();
       $user = Auth::user();

       $eventoss->user_id = $user->id;



       //verificao do uplodad

       $image = $formulario->image;

       //dd($image);

       if($formulario->hasfile('image') && $formulario->file('image')->isValid('image')){

          $extension = $image->extension();

          $nameImagem = md5($image->getClientOriginalName() . strtotime("now")). "." . $extension;

          $image->move(public_path('img/events'), $nameImagem);

            $eventoss->image = $nameImagem;
       }

       //comando para saber no banco
      $eventoss->save();


    //posso direcionar para uma view espefica ou posso dar o redirect
    //voltar para tratar o envio da mensagem
     return redirect('/')->with('msg', 'Evento criado com sucesso');
  }

   public function show($id){

    $even = Event::findOrFail($id);

   //pagando o usurio

      $eventOwner = User::where('id', $even->user_id)->first()->toArray();

        $v = $this->processar($even,$eventOwner);



    return $v;

   }

   //controller para o dashboard
   public function dashboard(){
    //user autenticado
    $user = auth()->user();

    $eventos = $user->events;

    return view('events.dashboard', ['events' => $eventos]);



   }


    private function processar($even,$eventOwner){

        return view('events.show',['event' => $even, 'eventOwner' => $eventOwner]);
    }



}
