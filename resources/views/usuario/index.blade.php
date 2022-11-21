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
<h1 id="t1">Mostrar Usuarios</h1>
<a id="nuevoUs" href="{{ url('usuario/create') }}">Nuevo Usuario</a>
<a id="nuevoUs" href="{{ url('/../public') }}">Atras</a>
<br><br><br>
<table id="tablaUs" >
    <thead >
        <tr>
            <th id="t2">ID</th>
            <th id="t2">Nombre</th>
            <th id="t2">Apellido</th>
            <th id="t2">Usuario</th>
            <th id="t2">Contraseña</th>
            <th id="t2">Acciones</th>
        </tr>
    
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->usuario }}</td>
            <td>{{ $usuario->password }}</td>
            <td>
                
            <a id="edi" href="{{ url('/usuario/'.$usuario->id.'/edit') }}">Editar</a> | 
                
            <form id="btn" action="{{ url('/usuario/'.$usuario->id) }}" method="post">
                @csrf
                {{ method_field ('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar este usuario?')"
                value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>