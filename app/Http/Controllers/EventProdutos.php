<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventProdutos extends Controller
{
    public function produtos(){

        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }
}
