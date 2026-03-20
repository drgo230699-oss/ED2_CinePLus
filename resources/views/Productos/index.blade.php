<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')



    <h1>Productos  registrados </h1>

    <div class="d-flex justify-content-end mb-2">
            <a href="{{  route('productos.create')  }}">    <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
            <button class="btn btn-success me-3"><i class="fa-solid fa-plus"></i> Nuevo producto </button>
            </a>

            <form action="{{route('productos.cerrar')}}" method="POST" >    <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
                @csrf
                <button class="btn btn-danger me-3">Cerrar sesion</button>
            
            </form>
            @if(auth()->user()->is_admin)
                <a href="{{ route('admin-dashboard') }}" class="btn btn-secondary mb-3">  <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
                    Admin   
                </a>
            
            @endif
    </div>

    @include('partials.alerts')

<br><br>
<table class="table table-striped table-hover"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Categoría</th>
            <th>Stock</th>
        </tr>
    </thead>
        <tbody>
     
            @foreach ($producto as $Producto)

            <tr>
                <!--VariableCiclo-BAse de datos-->
                <td>{{$Producto -> id}}</td>
                <td>{{$Producto -> nombre}}</td>
                <td>{{$Producto -> precio}}</td>       
                <td>{{$Producto -> descripción }}</td>
                <td>{{$Producto -> tipo}}</td>
                <td>{{$Producto -> categoría}}</td>
                <td>{{$Producto -> stock}}</td>
                <td>
                    <!-- Boton para editar -->
                    <a href="{{route('libros.edit',$Libro) }}">             <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
                        <button class="btn btn-warning">
                           <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </a>
                    
                    <form action="{{ route ('libros.destroy', $Libro)}}" method="POST" class="d-inline">   <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
                        @csrf
                        @method('DELETE')

                    <button 
                    class="btn btn-danger"
                    onclick="return confirm('¿Deseas eliminar el registro? ')"> 
                        <i class="fa-solid fa-trash"></i>   
                    </button>                


                    </form>

                </td>

            </tr>

            @endforeach
        </tbody>
</table>
    @endsection


</body>
</html>


