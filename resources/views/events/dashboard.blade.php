@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

@if(session('msg'))
   <p>{{session('msg')}}</p>
@endif
<div class="col-md-10 offset-md-1 dashboard-title-container">
<h1>Meu Eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
     <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participates</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>


     <tbody>
        @foreach($events as $resultEvent)
            <tr>
                <th scope="row"> {{$loop->index +1}}</th>
                <td><a href="/events/{{$resultEvent->id}}">{{$resultEvent->title}}</a></td>
                <td>0</td>
                <td><a href="/events/edit/{{$resultEvent->id}}" class="btn btn-info edit-btn">Editar</a>
                 <form action="/events/{{$resultEvent->id}}" method="post">
                 @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                 </form>
            </tr>
        @endforeach
     </tbody>
     </table>
    @else
    <p>Voce ainda não tem eventos criadosp , <a href="/events/create">Criar Evento</a></p>
    @endif
</div>
@endsection
