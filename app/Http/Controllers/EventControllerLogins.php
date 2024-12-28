<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventControllerLogins extends Controller
{
     public function Retornos(Request $dados) {

         $r = $dados->input('senha');

      return view('valida', ['senha'=> $r] );


   }

   }
