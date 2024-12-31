
@extends('layouts.main')

@section('title', 'Inicial')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" id="serach" name="search" class="form-control" placeholder="Procurar"/>
    </form>
</div>
<div id="eventos-container" class="col-md-12">
  @if($search)
  <h2>Evento Encontrado :: {{$search}} </h2>
  <p> Veja os eventos dos proximos dias</p>
  @else
  <h2>Proximos Eventos</h2>

  @endif

    <div id="card" class="row">
        @foreach($Events as $even)
        <div id="i" class="col-md-3">
            <img src="/img/events/{{$even->image}}" alt="{{$even->title}}">
            <div id="a" class="cardt-body">
                <p class="card-date">{{ date('d/m/y' ,strtotime($even->date))}}</p>
                 <h5 class="card-title">{{$even->title}}</h5>
                 <p class="card-participants">
                    x-parcipantes
                 </p>
                 <a href="/events/{{$even->id}}" class="btn btn-primary">Saber Mais </a>


            </div>
        </div>
        @endforeach
        @if(count($Events)  == 0 && $search )
         <p>Não foi possivel localizar este evento {{$search}} </p>  <a href="/">Ver Todos os Eventos disponiveis </a>
         @elseif(count($Events) == 0)
         <p>Não tem Evento Cadastrado</p>
         @endif
    </div>
</div>
@endsection



