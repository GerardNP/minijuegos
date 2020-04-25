@extends("layouts.app")

@section("titulo", "Perfil")

@section("main")
<h1>Perfil - {{$user->name}}</h1>
<form class="" action="index.html" method="post">
  <label for="id_name">Nombre</label>
  <input type="text" name="name" id="id_name" value="{{$user->name}}"><br><br>

  <label for="id_email">Correo</label>
  <input type="email" name="email" id="id_email" value="{{$user->email}}"><br><br>

  <label for="id_password">Contraseña</label>
  <input type="password" name="password" id="id_password" value="{{$user->password}}"><br><br>

  <input type="submit" name="save" value="Guardar"><br><br>
</form>
@endsection
