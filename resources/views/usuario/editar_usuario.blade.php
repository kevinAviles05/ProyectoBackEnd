<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
<h1 id="t1">Formulario para editar usuarios</h1>
<form  id ="formulario_editar" action="{{ url('/usuario/'.$usuario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}

    <input value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" type="Nombre" name="nombre" id="nombre"> <br><br>
    <input value="{{ isset($usuario->apellido)?$usuario->apellido:'' }}" type="Apellido" name="apellido" id="apellido"> <br><br>
    <input value="{{ isset($usuario->usuario)?$usuario->usuario:'' }}" type="Usuario" name="usuario" id="usuario"> <br><br>
    <input value="{{ isset($usuario->password)?$usuario->password:'' }}" type="Contraseña" name="password" id="password"> <br><br>
    <input  type="submit" value="Guardar Datos">
    <a href="{{ url('usuario/') }}">Regresar</a>
</form>
</body>
</html>