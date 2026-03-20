<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CineController extends Controller
{
    //


    public function home(){
        //La variable response maneja la respuesta del API
        //$response = Http::get('https://www.googleapis.com/books/v1/volumes',[
        //    'q' => 'subject:fiction',
        //    'maxResults' => 12,
        //    'key' => config('services.google_books.key')
        //]);

        //Usar oéradores ternarios "(??)" para verificar que el libro tiene infomacion 
        //$libros = $response -> json()['items'] ?? [];

        return view('login');
    }
}
