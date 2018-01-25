<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    // public function funcao(){
    //   return view('welcome');
    // }
    // public function mostraNome($nome){
    //   dd($nome);
    // }
    // public function mostraNomeIdade($nome,$idade){
    //   return view('welcome', [ 'nome' => $nome, 'idade' => $idade ]);
    // }

    public function add(Request $request)
    {
      // dd($request);
      $nome = $request->input('primeiroNome');
      $sobreNome = $request->input('sobreNome');
      dd($nome, $sobreNome);
    }
    public function showMain(){
      return view('page2');
    }

    public function mostraValores(){
      return view('');
    }
}
