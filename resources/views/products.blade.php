@extends('layouts.main')

@section('title', 'Produtos')

@section('content')



<h1>Minha tela de produtos acessado via url. </h1>
@if($busca != '')
<p> Usúario passou o valor no search de  :: {{$busca}}</p>

@endif


@endsection





