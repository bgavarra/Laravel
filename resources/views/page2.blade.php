<!DOCTYPE html>
<html>
  <head>

  </head>
  <body style="text-align:center; color:cadetblue;">
    <form action="{{ route('Rota2') }}" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
      <input type="text" name="primeiroNome" value="">
      <br>
      Last name:<br>
      <input type="text" name="sobreNome" value="">
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
