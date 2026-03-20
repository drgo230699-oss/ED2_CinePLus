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

    public function home(){
        //La variable response maneja la respuesta del API
        //$response = Http::get('https://www.googleapis.com/books/v1/volumes',[
        //    'q' => 'subject:fiction',
        //    'maxResults' => 12,
        //    'key' => config('services.google_books.key')
        //]);

        //Usar oéradores ternarios "(??)" para verificar que el libro tiene infomacion 
        //$productos = $response -> json()['items'] ?? [];

        return view('Productos.index');
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
}
