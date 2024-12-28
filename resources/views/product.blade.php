@extends('layouts.main')

@section('title', 'Produto')

@section('content')


@if($id != null)
<p>Exibindo produto do id :: {{$id}}</p>


@endif


@endsection
