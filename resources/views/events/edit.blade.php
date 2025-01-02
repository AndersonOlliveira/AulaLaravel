@extends('layouts.main')

@section('title', 'Editar Dados')

@section('content')

<div id="event-creat-container" class="col-md-6 offset-md-3">

<h1>Editadndo {{$evento->title}}</h1>
 <form action="/events/update/{{$evento->id}}" method="POST" enctype="multipart/form-data">
   @csrf
   {{ method_field('PUT')}}
   <div class="form-group">
        <label for="title">Imagem do envento::</label>
        <input type="file" name="image" class="form-control-file">
        <img src="/img/events/{{$evento->image}}" alt="{{$evento->title}}" class="img-preview">
    </div>
    <div class="form-group">
        <label for="title">Data</label>

    </div>
    <div class="form-group">
        <label for="title">Eventos::</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$evento->title}}">
    </div>
    <div class="form-group">
        <label for="title">Cidade::</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="local do evento" value="{{$evento->city}}">
    </div>
    <div class="form-group">
        <label for="title">O Evento e privado ??</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="didite o que vai acontecer" value="{{$evento->description}}"></textarea>
   </div>
   <div class="form-group">
        <label for="title">Adicone itens de infrastrutura</label>
     <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="cadeiras" value="{{$evento->cadeiras}}"> Cadeiras
     </div>
      <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="cadeiras"> Cadeiras
     </div>
     <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="Palco"> Palco
     </div>
     <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="Cerveja"> Cerveja
     </div>
     <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="mesa"> mesa
     </div>
     <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="caneta"> caneta
     </div>

   <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="papel"> papel
     </div>
   </div>
   <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="comidas"> comidas
     </div>

   <div class="form-group">
        <input type="checkbox" class="checkbox" name="items[]" value="brindes"> brindes
     </div>

   <div class="form-group">
   <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
   </div>
   </div>
   </div>
   </div>
 </form>
</div>


@endsection

