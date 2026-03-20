<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CineModel extends Model
{
    //Indicar cuales son los campos que el usuario si puede cambiar 
    protected $fillable = ['nombre','estado','precio','descripción','tipo','categoría','stock'];  
    protected $table = "productos";

           

}
