<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventContatos extends Controller
{
    public function contatos(){
        return view('contato');
    }
}
