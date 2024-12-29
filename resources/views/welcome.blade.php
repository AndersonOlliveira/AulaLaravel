
@extends('layouts.main')

@section('title', 'Inicial')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="serach" name="search" class="form-control" placeholder="Procurar"/>
    </form>
</div>
<div id="eventos-container" class="col-md-12">
    <h2>Procimos Eventos</h2>
    <p> Veja os eventos dos proximos dias</p>
    <div id="card-container" class="row">
        @foreach($Events as $even)
        <div id="i" class="col-md-3">
            <img src="../../../../icons/iconsUser.png" alt="{{$even->title}}">
            <div id="a" class="cardt-body">
                <p class="card-date">10/19/292</p>
                 <h5 class="card-title">{{$even->title}}</h5>
                 <p class="card-participants">
                    x-parcipantes
                 </p>
                 <a href="#" class="btn btn-primary">Saber Mais </a>


            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



