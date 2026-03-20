<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
        @extends('layouts.app')
        @section('content')
    <h1>Editar producto:  {{ $producto -> nombre }}</h1>

        <form action="{{ route('producto.update', $producto)}}" method="POST">   <!--   <--FALTA PONER RUTA AQUI !!!!!!!!!!!!!!!-->

        
        @csrf 
        @method('PUT')
        
        <input type="text" name="nombre" value=" {{ $producto -> nombre}} " placeholder="Nombre" class="form-control">
        <br><br>

        <input type="text" name="estado" value=" {{ $producto -> estado }} " placeholder="Estado" class="form-control">
        <br><br>

        <input type="number" name="precio" value=" {{ $producto -> precio }} " placeholder="Precio" class="form-control">
        <br><br>

        <input type="text" name="descripción" value=" {{ $producto -> descripción}} " placeholder="Descripción" class="form-control">
        <br><br>

        <input type="text" name="tipo" value=" {{ $producto -> tipo}} " placeholder="Tipo" class="form-control">
        <br><br>

        <input type="text" name="categoría" value=" {{ $producto -> categoría}} " placeholder="Categoría" class="form-control">
        <br><br>

        <input type="text" name="stock" value=" {{ $producto -> stock}} " placeholder="Stock" class="form-control">
        <br><br>

        <button type="submit" class="btn btn-success">Guardar</button>
        

        </form>

        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('libros.index')}}">         <!--   <--FALTA PONER RUTA AQUI!!!!!!!!!!!!!!!!! -->
            <button class="btn btn-danger">Regresar</button>
             </a>
        </div>

        


        @endsection

</body>
</html>

$table -> String('nombre');    
          
          
           
       
            $table -> String('stock');