<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CineModel;

class CineController extends Controller
{
    //


     public function index()
    { 
        // Obtener datos de la tabla en la BD*
        $productos = CineModel::all();
       
        return view('Productos.index', compact('productos'));  //Enviar los datos a la vista "Index"
       
    }

    public function create()
    {
        return view('Productos.create');
    }



    public function store(Request $request)
    {
        //Enviar datos a la BD 
        Libro::create([
        'nombre'=>$request-> nombre,
        'estado' =>$request-> estado,
        'precio'=>$request->precio,
        'descripción'=>$request->descripcion,
        'tipo'=>$request->tipo,
        'categoría'=>$request->categoria,
        'stock'=>$request->stock,
        ]);
            return redirect()->route('Productos.create');
    }
 public function edit(Libro $libro)
    {
        #Mandar la vista junto a la informacion del libro 
        return view('Libros.edit', compact('libro'));

    }
 /**
     * ACTUALIZAR REGISTRO 
     */
    public function update(Request $request, Producto $producto)
    {
        $request -> validate([
            'nombre' => 'required ', 
            'estado' => 'required ', 
            'precio' => 'required ', 
            'descripción' => 'required ',
            'tipo' => 'required ',
            'categoría' => 'required ',
            'stock' => 'required ',           

        ]);

        //Enviar todos los datos para actualizar 
        $producto -> update($request -> all()); 
        //Redireccionar al usuario a los libros 
        return redirect()-> route('producto.index')-> with('success', 'Registro actualizado :DD  ');
    }
public function destroy(Producto $producto)
    {
        //Funcion para eliminar el libro 
        $producto  -> delete(); 

        return  redirect() -> route('producto.index')
        ->with('success', 'Libro eliminado correctamente');  


    }



}


