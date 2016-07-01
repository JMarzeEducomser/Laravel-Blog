<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class PruebaController extends Controller
{
    public function funcion($parametro = 'sin valor'){
        return "Respuesta del controlador: ".$parametro;
    }
}
