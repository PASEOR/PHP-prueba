<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function __invoke(){
        return "hola desde la pagina de inicio";
    }
}
 /*controladores con un unico metodo mejor metodos invocable */