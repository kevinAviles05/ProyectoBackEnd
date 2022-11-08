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
<h1 id="t1">Formulario para agregar un nuevo usuario</h1>
<br><br>

<form action="{{ url('/usuario') }}" method="post" id ="formulario_editar">
    @csrf
    <input placeholder="Nombre" type="Nombre" name="nombre" id="nombre"> <br><br>
    <input placeholder="Apellido" type="Apellido" name="apellido" id="apellido"> <br><br>
    <input placeholder="Usuario" type="Usuario" name="usuario" id="usuario"> <br><br>
    <input placeholder="Contraseña" type="Contraseña" name="password" id="password"> <br><br>
    <input type="submit" value="Registrarse">
    <a href="{{ url('usuario/') }}">Regresar</a>
</form>
</body>
</html>