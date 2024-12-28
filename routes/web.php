<?php

use App\Http\Controllers\EventContatos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventControllerLogin;
use App\Http\Controllers\EventProdutos;

Route::get('/', [EventControllerLogin::class, 'index']);

Route::get('/events/create', [EventControllerLogin::class, 'create']);

//Route::post('/', [EventControllerLogins::class, 'retornos']);

 //pagina de contato
 Route::get('/contato', [EventContatos::class, 'contatos']);


//uma rota recebe o dado a outra com o mesmo paramento da url, para recerbe o id direciona para outra view que foi nomeda com outro nome para exibir o resultado do que foi passado por paramento get
Route::get('/produtos', [EventProdutos::class, 'produtos']);
     //consigo pegar os dados que veio da minha url via get() , sera que consigo pegar do post?


 //precisa para o id na function para ele poder recuperar
Route::get('/produtos_teste/{id?}',function($id = null){
  return view('product', ['id' => $id]);
});
