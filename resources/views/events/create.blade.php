@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="event-creat-container" class="col-md-6 offset-md-3">

<h1>Crie um Evento</h1>
 <form action="/events" method="POST">
   @csrf

    <div class="form-group">
        <label for="title">Eventos::</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
        <label for="title">Cidade::</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
    </div>
    <div class="form-group">
        <label for="title">O Evento e privado ??</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Eventos</label>
        <textarea name="description" id="description" class="form-control" placeholder="didite o que vai acontecer"></textarea>
   </div>
   <div class="form-group">
   <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
   </div>
 </form>
</div>
@endsection

