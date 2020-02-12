<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function prueba($param){
    	return 'Estoy dentro de prueba Controller y recibí este parametro ' . $param;
    }
}
