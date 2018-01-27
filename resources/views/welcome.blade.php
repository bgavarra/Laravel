<!DOCTYPE html>
<html>
  <head>

  </head>
  <body style="text-align:center; color:red;">


    @foreach($caras as $obj)
      o membro {{$obj->nome}} {{$obj->Sobrenome}} esta na lista.<br>
    @endforeach



  </body>
