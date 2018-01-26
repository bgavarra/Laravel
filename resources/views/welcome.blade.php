<!DOCTYPE html>
<html>
  <head>

  </head>
  <body style="text-align:center; color:red;">
    Hello word

    @foreach($caras as $obj)
      o membro {{$obj->nome}} {{$obj->Sobrenome}} esta na lista.
    @endforeach

    O usuario {{$cara->nome}} foi deletado. //passar isso pra outra view responsavel por deletar
    
  </body>
