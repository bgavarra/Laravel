<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControladorController@showMain')->name('Rota1');

Route::post('/', 'ControladorController@add')->name('Rota2');

Route::get('/page1', function () {
    return view('pages/page1');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('servicos/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
    return "O serviço do " .$nome. " é muito bom.<br><br>
Não gostou?<a href='".url('contato')."'> Esses são os dados dele: CPF: ".$cpf." RG: ".$rg." CEP: ".$cep. ". Vai atrás dele rs.</a>";
});
Route::get('servicos/{nome}/{cpf}/{rg}', function ($nome,$cpf,$rg) {
    return "O serviço do " .$nome. " é muito bom.<br><br>
Não gostou?<a href='".url('contato')."'> Esses são os dados dele: CPF: ".$cpf." RG: ".$rg." Vai atrás dele rs.</a>";
});
Route::get('servicos/{nome}/{cpf}', function ($nome,$cpf) {
    return "O serviço do " .$nome. " é muito bom.<br><br>
Não gostou?<a href='".url('contato')."'> Esses são os dados dele: CPF: ".$cpf.". Vai atrás dele rs.</a>";
});
Route::get('servicos/{nome}', function ($nome) {
    return "O serviço do " .$nome. " é muito bom.<br><br>
Não gostou?<a href='".url('contato')."'> Google ta aí, se vira pra achar ele.</a>";
});
Route::get('/page2/{name}/{idade}/{carro}', function ($name,$idade,$carro) {
  return view('page2',['name'=>$name,'idade'=>$idade,'carro'=>$carro]);
});
