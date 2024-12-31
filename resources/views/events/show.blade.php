@extends('layouts.main')

@section('title', 'Show')

@section('content')


 <div id="div" class="col-md-10 offset-md-1">
    <div id="div" class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
           <div id="info-contaner" class="col-md-6">
             <h1>{{$event->title}}</h1>
             <p class="event-city">aqui vai o meu icone {{$event->city}}</p>
           </div>
           <div id="info-contaner" class="col-md-6">
             <h1>Dono do Evento </h1>
             <p class="event-city">{{$eventOwner['name']}}</p>
           </div>
           <h1>Data do evento </h1>
             <p class="event-city">Data::{{ date('d/m/y' ,strtotime($event->date))}}</p>
           </div>
           <h3>O Evento conta com</h3>
           <ul id="items-list" class="items-list">
            @foreach($event->items as $item)

             <li id="lista">{{$item}} </li>

            @endforeach
           </ul>
     </div>

    </div>
 </div>

@endsection
